@php
    use App\Enums\EventType;
    use App\Models\Event;

    // Honor URL filters (GET params) — page is fully URL-state driven (no JS).
    $typeFilter     = request()->query('type');
    $practiceFilter = request()->query('practice');
    $projectFilter  = request()->query('project');
    $showPast       = request()->boolean('past');

    // Build query, applying filters when valid.
    $query = Event::query()
        ->where('is_public', true)
        ->when($showPast,
            fn ($q) => $q->past(),
            fn ($q) => $q->upcoming(),
        );

    if ($typeFilter && EventType::tryFrom($typeFilter)) {
        $query->ofType($typeFilter);
    }
    if ($practiceFilter) {
        $query->forPractice($practiceFilter);
    }
    if ($projectFilter) {
        $query->forProject($projectFilter);
    }

    $events = $query->get();
    $hasActiveFilters = (bool) ($typeFilter || $practiceFilter || $projectFilter || $showPast);

    // Group events by month (NL locale) — yields "juni 2026", "juli 2026", …
    \Carbon\Carbon::setLocale('nl');
    $grouped = $events->groupBy(fn (Event $e) => $e->starts_at->isoFormat('MMMM YYYY'));

    // Strand axis — one user-facing question ("welk onderdeel?") merging the two
    // distinct content-model entities (RecurringPractice + Project) into a single
    // mutually-exclusive chip row. Each chip sets practice OR project (never both),
    // which structurally prevents the empty-result AND-combination. URL param names
    // (practice / project) are unchanged, so deep-links from practice/editie pages hold.
    $strandOptions = [
        ['param' => 'practice', 'value' => 'atelier-leon',   'label' => 'Atelier Leon'],
        ['param' => 'practice', 'value' => 'leon-op-school', 'label' => 'Leon op school'],
        ['param' => 'project',  'value' => 'mariage',        'label' => 'Mariage'],
    ];

    // 1-line explainers for internal event types (per 30-structure IA principle 5).
    // Copy source: 42-briefs/12-agenda-content.md §3.
    $internalExplainers = [
        EventType::LeonsWhitePage->value  => 'Intern denkmoment — geen publiek programma.',
        EventType::LeonRondDeTafel->value => 'Intern overleg — geen publiek programma.',
    ];

    // Per-row href: project page if project_slug set, practice page if practice_slug set,
    // else self-link (internal events have no parent page). Gap #6 — editie-routing
    // deferred until P-06 editie page lands a confirmed slug-resolution.
    $hrefFor = function (Event $event) {
        if ($event->project_slug === 'mariage') {
            return route('dansateliers.mariage');
        }
        if ($event->practice_slug === 'atelier-leon') {
            return route('dansateliers.atelier-leon');
        }
        if ($event->practice_slug === 'leon-op-school') {
            return route('dansateliers.leon-op-school');
        }
        return route('agenda');
    };

    // Helper: build a route URL preserving current filters except those overridden.
    $urlWith = function (array $overrides = []) use ($typeFilter, $practiceFilter, $projectFilter, $showPast) {
        $params = array_filter([
            'type'     => $typeFilter,
            'practice' => $practiceFilter,
            'project'  => $projectFilter,
            'past'     => $showPast ? '1' : null,
        ], fn ($v) => $v !== null && $v !== '');

        foreach ($overrides as $k => $v) {
            if ($v === null || $v === '' || $v === false) {
                unset($params[$k]);
            } else {
                $params[$k] = $v === true ? '1' : $v;
            }
        }

        return route('agenda', $params);
    };
@endphp

@extends('layouts.app', [
    'title'       => 'Agenda — Leon',
    'description' => 'Alles wat Leon doet, op één plek: open ateliers, repetities, voorstellingen en interne momenten.',
])

@section('content')

    {{-- §1 Header + filters in one section so the pills sit directly under the lede
         and the list is reachable without a long scroll. --}}
    <section class="section">
        <div class="container-wide">

            <p class="meta uppercase tracking-wide mb-3">Eén overzicht</p>
            <h1>Agenda</h1>
            <p class="mt-4 text-lg max-w-[var(--max-content)]">Alles wat Leon doet, op één plek.</p>

            {{-- §2 Onderdeel — single-select chip row, no visible label (the four chips
                 are self-evident). Each chip sets one axis and clears the other, so
                 practice and project can never AND into an empty list. An inbound ?type=
                 deep-link is still honored by the query and cleared via "Toon alles". --}}
            <nav aria-label="Filter op onderdeel" class="mt-8 flex flex-wrap items-center gap-2">
                @php $strandActive = $practiceFilter || $projectFilter; @endphp
                <a href="{{ $urlWith(['practice' => false, 'project' => false]) }}"
                   @class(['chip', 'chip-active' => ! $strandActive])
                   @if (! $strandActive) aria-current="true" @endif>
                    Alles
                </a>
                @foreach ($strandOptions as $opt)
                    @php
                        $isActive = ($opt['param'] === 'practice' && $practiceFilter === $opt['value'])
                                 || ($opt['param'] === 'project'  && $projectFilter  === $opt['value']);
                        $href = $urlWith([
                            'practice' => $opt['param'] === 'practice' ? $opt['value'] : false,
                            'project'  => $opt['param'] === 'project'  ? $opt['value'] : false,
                        ]);
                    @endphp
                    <a href="{{ $href }}"
                       @class(['chip', 'chip-active' => $isActive])
                       @if ($isActive) aria-current="true" @endif>
                        {{ $opt['label'] }}
                    </a>
                @endforeach
                {{-- Reset sits inline with the pills, only when a filter is active.
                     Past/upcoming switch lives at the foot of the list instead. --}}
                @if ($typeFilter || $practiceFilter || $projectFilter)
                    <a href="{{ route('agenda') }}" class="btn-text ml-2">Toon alles</a>
                @endif
            </nav>

            {{-- §3 Grouped event list --}}
            @if ($events->isEmpty())
                @if ($hasActiveFilters)
                    {{-- Filtered-zero (reset lives under the pills above) --}}
                    <div class="py-12">
                        <p>Niets gevonden.</p>
                    </div>
                @else
                    {{-- Agenda-zero (no filters, no events) --}}
                    <div class="py-12">
                        <p>
                            Nog niets gepland. Stuur ons een mailtje als je iets zoekt:
                            <a href="mailto:hello@leon.dance">hello@leon.dance</a>.
                        </p>
                    </div>
                @endif
            @else
                @foreach ($grouped as $monthLabel => $monthEvents)
                    <h2 class="mt-12 mb-4 pt-6 border-t border-[var(--color-border)] text-xl font-medium">
                        {{ $monthLabel }}
                    </h2>
                    <ul class="divide-y divide-[var(--color-border-subtle)]">
                        @foreach ($monthEvents as $event)
                            @php
                                $explainer = $internalExplainers[$event->type->value] ?? null;
                                $href = $hrefFor($event);
                                $hasEnd = $event->ends_at && $event->ends_at->format('H:i') !== $event->starts_at->format('H:i');
                            @endphp
                            <li>
                                <a href="{{ $href }}"
                                   class="block py-4 no-underline grid grid-cols-1 md:grid-cols-[8rem_1fr_auto] gap-x-6 gap-y-1 items-baseline hover:bg-[var(--color-hover)] rounded-[var(--radius)] -mx-3 px-3">
                                    {{-- Date column --}}
                                    <div>
                                        <div class="meta text-[var(--color-text)]">
                                            {{ $event->starts_at->isoFormat('dd D MMM') }}
                                        </div>
                                        <div class="meta">
                                            {{ $event->starts_at->format('H:i') }}@if ($hasEnd)–{{ $event->ends_at->format('H:i') }}@endif
                                        </div>
                                    </div>

                                    {{-- Title + meta column --}}
                                    <div>
                                        <div class="font-medium">{{ $event->title }}</div>
                                        <div class="meta">
                                            <span>{{ $event->type->label() }}</span>
                                            @if ($event->lead)
                                                <span aria-hidden="true"> · </span>
                                                <span>{{ $event->lead }}</span>
                                            @endif
                                            @if ($event->partners)
                                                <span aria-hidden="true"> · </span>
                                                <span>x {{ $event->partners }}</span>
                                            @endif
                                        </div>
                                        @if ($explainer)
                                            <div class="meta mt-1">{{ $explainer }}</div>
                                        @endif
                                    </div>

                                    {{-- Venue column --}}
                                    @if ($event->venue)
                                        <div class="meta md:text-right">{{ $event->venue }}</div>
                                    @else
                                        <div></div>
                                    @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            @endif

            {{-- Past / upcoming switch — at the foot of the list, secondary by position. --}}
            <div class="mt-12 pt-6 border-t border-[var(--color-border)] meta">
                @if ($showPast)
                    <a href="{{ $urlWith(['past' => false]) }}">Eerstvolgende activiteiten</a>
                @else
                    <a href="{{ $urlWith(['past' => true]) }}">Voorbije activiteiten</a>
                @endif
            </div>

        </div>
    </section>

@endsection
