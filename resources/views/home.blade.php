@php
    use App\Enums\EventType;

    $upcomingEvents = \App\Models\Event::query()
        ->where('is_public', true)
        ->whereNotIn('type', [EventType::LeonsWhitePage->value, EventType::LeonRondDeTafel->value])
        ->upcoming()
        ->limit(3)
        ->get();

    $hrefFor = function (\App\Models\Event $event) {
        if ($event->practice_slug === 'atelier-leon') {
            return route('dansateliers.atelier-leon');
        }
        if ($event->practice_slug === 'leon-op-school') {
            return route('dansateliers.leon-op-school');
        }
        if ($event->project_slug === 'mariage') {
            return route('dansateliers.mariage');
        }
        return route('agenda');
    };

    $openCallEditie = \App\Models\Editie::openInschrijving()
        ->orderBy('starts_at')
        ->first();

    \Carbon\Carbon::setLocale('nl');
@endphp

@extends('layouts.app', [
    'title' => 'Leon — participatieve dans in Brussel',
    'description' => 'Een open uitnodiging om mee te dansen, in een wekelijks open atelier of in grotere participatieve voorstellingen. In Brussel sinds 2010.',
])

@section('content')

    {{-- §1 Hero (SP-03 — spec lives in 42-briefs/01-home §1) --}}
    <section class="section">
        <div class="container-wide">
            <p class="meta uppercase tracking-wide mb-3">Leon · Brussel</p>
            <h1>Een open uitnodiging om mee te dansen — met de mensen die het al doen.</h1>
            <p class="mt-6 text-lg max-w-[var(--max-content)]">
                Een wekelijks open atelier, en grotere voorstellingen waarin Brusselaars
                samen op de scène staan. Geen ervaring nodig om mee te doen.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="{{ route('dansateliers.atelier-leon') }}" class="btn-primary">Kom langs in Atelier Leon</a>
                <a href="{{ route('agenda') }}" class="btn-ghost">Bekijk de agenda</a>
            </div>
            <p class="meta mt-8">In Brussel sinds 2010. Wekelijks samen, gratis en zonder inschrijving.</p>
        </div>
    </section>

    {{-- Open-call band (SP-16) · conditional — renders only when a call is open --}}
    @include('partials.open-call-band', ['editie' => $openCallEditie, 'variant' => 'home'])

    {{-- §2 Photo (SP-13) · No hero photo selected yet (brief gap #2); section collapses per spec.
         When asset arrives:
         @include('partials.photo-block', [
             'src' => asset('img/...'),
             'alt' => '...',
             'credit' => '© Photographer · Atelier Leon, Pianofabriek, 2024',
         ])
    --}}

    {{-- §3 Het werk van Leon (SP-05 × 4 · shared with dansateliers/index via work-grid) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Het werk van Leon</h2>
            @include('partials.work-grid')
        </div>
    </section>

    {{-- §4 Eerstvolgende (SP-07 × 3) · top-3 upcoming public events --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Eerstvolgende</h2>
            @if ($upcomingEvents->isEmpty())
                <p class="meta">Geen eerstvolgende activiteiten in de agenda.</p>
            @else
                <div class="border-t border-[var(--color-border-subtle)]">
                    @foreach ($upcomingEvents as $event)
                        @include('partials.date-row', [
                            'date'     => strtoupper($event->starts_at->isoFormat('dd D.MM')),
                            'time'     => $event->starts_at->format('H:i'),
                            'type'     => $event->title,
                            'location' => $event->venue ?? '—',
                            'href'     => $hrefFor($event),
                        ])
                    @endforeach
                </div>
            @endif
            <p class="mt-6"><a href="{{ route('agenda') }}" class="btn-text">→ Volledige agenda</a></p>
        </div>
    </section>

    {{-- §5 Werk je samen met Leon? (text-link list) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-3">Werk je samen met Leon?</h2>
            <p>Drie manieren om met Leon in zee te gaan:</p>
            <ul class="mt-6 space-y-3">
                @foreach (\App\Support\SiteSections::samenwerken() as $row)
                    <li><a href="{{ $row['href'] }}" class="no-underline">→ {{ $row['label'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- §6 Onze partners (SP-09 Featured variant) --}}
    <div class="border-t border-[var(--color-border)]">
        @include('partials.funder-wall', ['variant' => 'featured'])
    </div>

@endsection
