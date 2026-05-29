@php
    use App\Enums\EventType;

    \Carbon\Carbon::setLocale('nl');

    $status       = $editie->status();
    $titleLabel   = trim($editie->stad . ' ' . $editie->jaar);
    $groepHeading = $status === 'afgelopen' ? 'Wie deed mee' : 'Wie doet mee';

    $heroLede = $editie->groep_prose_intro
        ? 'Samen dansen in ' . $editie->stad . ', met ' . ($editie->groep_size ?? 'een groep') . ' ' . ($editie->stadgenoot ?? 'mensen') . ' en de kerngroep van Leon.'
        : 'Eén editie van Mariage in ' . $editie->stad . '. Open ateliers, repetities en een voorstelling. Alle praktische info op deze pagina.';

    // §6 — voorstellingen for this editie (live from the Event model, via the relation)
    $voorstellingen = $editie->events()
        ->where('is_public', true)
        ->ofType(EventType::Voorstelling)
        ->orderBy('starts_at')
        ->get();
@endphp

@extends('layouts.app', [
    'title'       => 'Mariage: ' . $titleLabel . ' · Leon',
    'description' => $titleLabel . ': één editie van Mariage. ' . ($editie->periode ?? '') . ' Lokale groep in ' . $editie->stad . '.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant A; B when per-editie photo lands) --}}
    <section class="section">
        <div class="container-wide">
            <p class="meta uppercase tracking-wide mb-3">
                <a href="{{ route('dansateliers.mariage') }}" class="no-underline">Mariage</a>
                <span> · editie</span>
            </p>
            <h1>{{ $titleLabel }}</h1>
            <p class="mt-4 text-lg max-w-[var(--max-content)]">{{ $heroLede }}</p>
        </div>
    </section>

    {{-- §2 Photo (SP-13) · per-editie asset pending — section collapses per SP-13 contract --}}

    {{-- §3 Praktisch (key-value pairs · BG-3) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Praktisch</h2>
            <dl class="grid grid-cols-1 md:grid-cols-[10rem_1fr] gap-x-6 gap-y-4 max-w-[var(--max-content)]">
                <dt class="meta">Stad</dt>
                <dd>{{ $editie->stad }}</dd>

                <dt class="meta">Periode</dt>
                <dd>{{ $editie->periode ?? '[periode — te bevestigen]' }}</dd>

                <dt class="meta">Partner</dt>
                <dd>{{ $editie->partner ?? '[partner — te bevestigen]' }}</dd>

                <dt class="meta">Locatie(s)</dt>
                <dd>{{ $editie->locaties ?? '[locaties — te bevestigen]' }}</dd>

                <dt class="meta">Status</dt>
                <dd>
                    <span class="meta inline-block border border-[var(--color-border)] rounded-[var(--radius)] px-2 py-0.5">
                        {{ $status }}
                    </span>
                </dd>
            </dl>
        </div>
    </section>

    {{-- §4 Wie deed/doet mee (groep + optional SP-12 quote) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-6">{{ $groepHeading }}</h2>
            <div class="max-w-[var(--max-content)]">
                @if ($editie->groep_prose_intro)
                    <p>{{ $editie->groep_prose_intro }}</p>
                @else
                    <p class="meta">
                        Deelnemers, vrijwilligers en passanten {{ $status === 'afgelopen' ? 'vormden' : 'vormen' }}
                        samen met de kern van Leon de groep van deze editie.
                        <span class="block mt-2">[Per-editie prose — te leveren door team · gap #3]</span>
                    </p>
                @endif

                @if ($editie->quote)
                    <figure class="mt-8 border-l border-[var(--color-border)] pl-6 py-2">
                        <blockquote><p class="text-lg">"{{ $editie->quote }}"</p></blockquote>
                        @if ($editie->quote_attr)
                            <figcaption class="meta mt-3">— {{ $editie->quote_attr }}</figcaption>
                        @endif
                    </figure>
                @endif
            </div>
        </div>
    </section>

    {{-- §5 Inschrijving (driven by isInschrijvingOpen(), NOT date-status · BG-7) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-6">Inschrijving</h2>
            <div class="max-w-[var(--max-content)]">
                @if ($editie->isInschrijvingOpen())
                    @include('partials.inschrijving-form', [
                        'editieSlug' => $editie->slug,
                        'intro'      => 'De groep voor ' . $titleLabel . ' vormt zich nu. Doe je mee? Wij horen graag van je.',
                        'note'       => $editie->inschrijvingClosesSoon()
                            ? 'Inschrijven kan tot ' . $editie->inschrijving_closes_at->translatedFormat('j F') . '.'
                            : null,
                    ])
                @elseif ($status !== 'afgelopen')
                    <p>De inschrijvingen voor deze editie zijn gesloten. Wil je een volgende editie meedoen? Hou de projectpagina in het oog.</p>
                    <p class="mt-6"><a href="{{ route('dansateliers.mariage') }}" class="btn-ghost">→ Naar Mariage</a></p>
                @else
                    <p>Deze editie is afgerond. Wil je meedoen in een volgende Mariage-editie? Bekijk de aankomende edities op de projectpagina.</p>
                    <p class="mt-6"><a href="{{ route('dansateliers.mariage') }}" class="btn-ghost">→ Naar Mariage</a></p>
                @endif
            </div>
        </div>
    </section>

    {{-- §6 Voor publiek — voorstellingen (SP-07 × n · live from Event model) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Voor publiek: voorstellingen</h2>

            @include('partials.agenda-list', [
                'events'    => $voorstellingen,
                'href'      => fn ($e) => route('agenda', ['project' => 'mariage', 'type' => EventType::Voorstelling->value]),
                'emptyText' => 'Nog geen voorstellingen aangekondigd voor deze editie.',
            ])
            @if ($voorstellingen->isEmpty())
                <p class="mt-6"><a href="{{ route('dansateliers.mariage') }}" class="btn-text">→ Naar Mariage</a></p>
            @else
                <p class="mt-6"><a href="{{ route('agenda', ['project' => 'mariage', 'type' => EventType::Voorstelling->value]) }}" class="btn-text">→ Volledige agenda</a></p>
            @endif
        </div>
    </section>

    {{-- §7 Coda — terug naar Mariage (BG-7) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <a href="{{ route('dansateliers.mariage') }}" class="btn-text">← Terug naar Mariage</a>
        </div>
    </section>

@endsection
