@php
    use App\Enums\EventType;

    // ──────────────────────────────────────────────────────────────
    // Per-editie metadata (BG-8 in 42-briefs/06-mariage-editie.md)
    // Hard-coded slug → metadata until Editie Eloquent model lands
    // (P-06 brief gap #1; P-05 brief gap #8). Status is recomputed
    // at view-time from start/end + today. Per-editie content gaps
    // (#2, #3, #5) noted with [te bevestigen] strawman placeholders.
    // ──────────────────────────────────────────────────────────────
    $edities = [
        'brussel-2024' => [
            'stad'       => 'Brussel',
            'jaar'       => 2024,
            'stadgenoot' => 'Brusselaars',
            'periode'    => 'maart – mei 2024',
            'starts_at'  => '2024-03-01',
            'ends_at'    => '2024-05-31',
            'partner'    => 'KVS · Maison des Cultures · Pianofabriek',
            'locaties'   => 'Repetities in Cultureghem · voorstellingen in KVS, Maison des Cultures en Pianofabriek.',
            'groep_size' => 'twintig',
            'groep_age'  => '18 en 67',
            'groep_prose_intro' => 'Een groep van twintig Brusselaars tussen 18 en 67 vormde de lokale cast van deze editie. Ze werden samengesteld via een open call in het voorjaar van 2024, na drie kennismakingsmomenten in Cultureghem. Tien weken lang repeteerden ze elke woensdag samen met de kerngroep van Leon, naar de première in KVS toe.',
            'quote'      => 'Ik kan er mezelf zijn en ik ontmoet mensen die ik anders nooit zou tegenkomen.',
            'quote_attr' => 'Hadja, 67 · Mariage Brussel 2024',
        ],
        'antwerpen-2024' => [
            'stad'       => 'Antwerpen',
            'jaar'       => 2024,
            'stadgenoot' => 'Antwerpenaars',
            'periode'    => 'sep – dec 2024',
            'starts_at'  => '2024-09-01',
            'ends_at'    => '2024-12-15',
            'partner'    => '[partner — te bevestigen]',
            'locaties'   => '[locaties — te bevestigen]',
            'groep_size' => '[~aantal]',
            'groep_age'  => '[leeftijd-min] en [leeftijd-max]',
            'groep_prose_intro' => null,
            'quote'      => null,
            'quote_attr' => null,
        ],
        'rotterdam-2025' => [
            'stad'       => 'Rotterdam',
            'jaar'       => 2025,
            'stadgenoot' => 'Rotterdammers',
            'periode'    => 'jan – apr 2025',
            'starts_at'  => '2025-01-15',
            'ends_at'    => '2025-04-30',
            'partner'    => '[partner — te bevestigen]',
            'locaties'   => '[locaties — te bevestigen]',
            'groep_size' => '[~aantal]',
            'groep_age'  => '[leeftijd-min] en [leeftijd-max]',
            'groep_prose_intro' => null,
            'quote'      => null,
            'quote_attr' => null,
        ],
        'gent-2025' => [
            'stad'       => 'Gent',
            'jaar'       => 2025,
            'stadgenoot' => 'Gentenaars',
            'periode'    => 'mrt – jun 2025',
            'starts_at'  => '2025-03-15',
            'ends_at'    => '2025-06-30',
            'partner'    => '[partner — te bevestigen]',
            'locaties'   => '[locaties — te bevestigen]',
            'groep_size' => '[~aantal]',
            'groep_age'  => '[leeftijd-min] en [leeftijd-max]',
            'groep_prose_intro' => null,
            'quote'      => null,
            'quote_attr' => null,
        ],
        'marseille-2025' => [
            'stad'       => 'Marseille',
            'jaar'       => 2025,
            'stadgenoot' => 'Marseillais',
            'periode'    => 'sep – dec 2025',
            'starts_at'  => '2025-09-01',
            'ends_at'    => '2025-12-15',
            'partner'    => '[partner — te bevestigen]',
            'locaties'   => '[locaties — te bevestigen]',
            'groep_size' => '[~aantal]',
            'groep_age'  => '[leeftijd-min] en [leeftijd-max]',
            'groep_prose_intro' => null,
            'quote'      => null,
            'quote_attr' => null,
        ],
        'luik-2026' => [
            'stad'       => 'Luik',
            'jaar'       => 2026,
            'stadgenoot' => 'Luikenaars',
            'periode'    => 'juni – december 2026',
            'starts_at'  => '2026-06-01',
            'ends_at'    => '2026-12-15',
            'partner'    => '[partner — te bevestigen]',
            'locaties'   => '[locaties — te bevestigen]',
            'groep_size' => '[~aantal]',
            'groep_age'  => '[leeftijd-min] en [leeftijd-max]',
            'groep_prose_intro' => null,
            'quote'      => null,
            'quote_attr' => null,
        ],
    ];

    $meta = $edities[$editie] ?? null;

    // Fallback for unknown editie slugs (gap #8 — robust 404 deferred to model arrival)
    if ($meta === null) {
        $meta = [
            'stad'       => ucfirst(str_replace('-', ' ', $editie ?? 'onbekend')),
            'jaar'       => '',
            'stadgenoot' => 'mensen',
            'periode'    => '[periode — te bevestigen]',
            'starts_at'  => null,
            'ends_at'    => null,
            'partner'    => '[partner — te bevestigen]',
            'locaties'   => '[locaties — te bevestigen]',
            'groep_size' => '[~aantal]',
            'groep_age'  => '[leeftijd-min] en [leeftijd-max]',
            'groep_prose_intro' => null,
            'quote'      => null,
            'quote_attr' => null,
        ];
    }

    // Derive status from dates vs. today (SP-06 spec)
    $today = now();
    $status = 'aankomend';
    if ($meta['starts_at']) {
        $startsAt = \Carbon\Carbon::parse($meta['starts_at']);
        $endsAt   = $meta['ends_at'] ? \Carbon\Carbon::parse($meta['ends_at']) : null;
        if ($today->lt($startsAt)) {
            $status = 'aankomend';
        } elseif ($endsAt && $today->gt($endsAt)) {
            $status = 'afgelopen';
        } else {
            $status = 'lopend';
        }
    }

    $titleLabel = trim($meta['stad'] . ' ' . $meta['jaar']);
    $heroLede = match (true) {
        $meta['groep_prose_intro'] !== null => 'Tien weken samen dansen in ' . $meta['stad'] . ', met ' . $meta['groep_size'] . ' ' . $meta['stadgenoot'] . ' en de kerngroep van Leon. ' . ($status === 'afgelopen' ? 'Voorstellingen' : 'Voorstellingen voorzien') . ' in ' . ($meta['partner'] !== '[partner — te bevestigen]' ? $meta['partner'] : '[hoofdvenue]') . '.',
        default => 'Eén editie van Mariage in ' . $meta['stad'] . '. Lokale groep, eigen periode, eigen voorstellingen — alle praktische info op deze pagina.',
    };

    // §6 — preserve existing live query (Voorstelling, public, forEditie)
    $voorstellingen = \App\Models\Event::query()
        ->where('is_public', true)
        ->ofType(EventType::Voorstelling)
        ->forEditie($editie)
        ->orderBy('starts_at')
        ->get();

    // §4 heading verb-tense (status-aware)
    $groepHeading = $status === 'afgelopen' ? 'Wie deed mee' : 'Wie doet mee';

    \Carbon\Carbon::setLocale('nl');
@endphp

@extends('layouts.app', [
    'title'       => 'Mariage — ' . $titleLabel . ' · Leon',
    'description' => $titleLabel . ' — één editie van Mariage. ' . $meta['periode'] . '. Lokale groep in ' . $meta['stad'] . '.',
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
            <p class="mt-4 text-lg max-w-[var(--max-content)]">
                {{ $heroLede }}
            </p>
        </div>
    </section>

    {{-- §2 Photo (SP-13) · Per-editie photo asset pending (P-06 brief gap #4).
         Section collapses per SP-13 contract until asset arrives.
         When asset arrives:
         @include('partials.photo-block', [
             'src'    => asset('img/mariage/' . $editie . '.jpg'),
             'alt'    => 'Mariage ' . $titleLabel,
             'credit' => '© [Fotograaf] · Mariage ' . $titleLabel,
         ])
    --}}

    {{-- §3 Praktisch (key-value pairs · BG-3) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Praktisch</h2>
            <dl class="grid grid-cols-1 md:grid-cols-[10rem_1fr] gap-x-6 gap-y-4 max-w-[var(--max-content)]">
                <dt class="meta">Stad</dt>
                <dd>{{ $meta['stad'] }}</dd>

                <dt class="meta">Periode</dt>
                <dd>{{ $meta['periode'] }}</dd>

                <dt class="meta">Partner</dt>
                <dd>{{ $meta['partner'] }}</dd>

                <dt class="meta">Locatie(s)</dt>
                <dd>{{ $meta['locaties'] }}</dd>

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
                @if ($meta['groep_prose_intro'])
                    <p>{{ $meta['groep_prose_intro'] }}</p>
                @else
                    <p class="meta">
                        Een groep van {{ $meta['groep_size'] }} {{ $meta['stadgenoot'] }} tussen
                        {{ $meta['groep_age'] }} {{ $status === 'afgelopen' ? 'vormde' : 'vormt' }}
                        de lokale cast van deze editie. Tien weken samen repeteren naar de voorstellingen toe.
                        <span class="block mt-2">[Per-editie prose — te leveren door team · gap #3]</span>
                    </p>
                @endif

                @if ($meta['quote'])
                    {{-- SP-12 Quote / testimony (variant A inline frame) · no portrait per spec --}}
                    <figure class="mt-8 border-l border-[var(--color-border)] pl-6 py-2">
                        <blockquote>
                            <p class="text-lg">“{{ $meta['quote'] }}”</p>
                        </blockquote>
                        <figcaption class="meta mt-3">— {{ $meta['quote_attr'] }}</figcaption>
                    </figure>
                @endif
            </div>
        </div>
    </section>

    {{-- §5 Inschrijving (status-conditional · BG-5) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-6">Inschrijving</h2>
            <div class="max-w-[var(--max-content)]">
                @if ($status === 'aankomend')
                    <p>
                        De groep voor {{ $titleLabel }} vormt zich nu. Wil je meedoen?
                        Wij horen graag van je.
                    </p>
                    <p class="mt-6">
                        <a href="mailto:hello@leon.dance?subject=Mariage%20{{ rawurlencode($titleLabel) }}"
                           class="btn-primary">Schrijf je in</a>
                    </p>
                @elseif ($status === 'lopend')
                    <p>
                        Deze editie is bezig — de groep is voltallig. Wil je een volgende editie
                        meedoen? Hou de projectpagina in het oog.
                    </p>
                    <p class="mt-6">
                        <a href="{{ route('dansateliers.mariage') }}" class="btn-ghost">→ Naar Mariage</a>
                    </p>
                @else
                    <p>
                        Deze editie is afgerond. Wil je meedoen in een volgende Mariage-editie?
                        Bekijk de aankomende edities op de projectpagina.
                    </p>
                    <p class="mt-6">
                        <a href="{{ route('dansateliers.mariage') }}" class="btn-ghost">→ Naar Mariage</a>
                    </p>
                @endif
                <p class="meta mt-4">
                    {{-- Per P-06 brief gap #6: SP-10 inschrijving form blocked by Dn-03 GDPR; mailto strawman in v0.1. --}}
                    Inschrijvingsformulier volgt zodra GDPR-flow geklaard is.
                </p>
            </div>
        </div>
    </section>

    {{-- §6 Voor publiek — voorstellingen (SP-07 × n · live from Event model) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Voor publiek — voorstellingen</h2>

            @if ($voorstellingen->isEmpty())
                <p class="meta">Nog geen voorstellingen aangekondigd voor deze editie.</p>
                <p class="mt-6">
                    <a href="{{ route('dansateliers.mariage') }}" class="btn-text">→ Naar Mariage</a>
                </p>
            @else
                <div class="border-t border-[var(--color-border-subtle)]">
                    @foreach ($voorstellingen as $event)
                        @include('partials.date-row', [
                            'date'     => strtoupper($event->starts_at->isoFormat('dd D.MM')),
                            'time'     => $event->starts_at->format('H:i'),
                            'type'     => $event->title,
                            'location' => $event->venue ?? '—',
                            'href'     => route('agenda', ['project' => 'mariage', 'type' => EventType::Voorstelling->value]),
                        ])
                    @endforeach
                </div>
                <p class="mt-6">
                    <a href="{{ route('agenda', ['project' => 'mariage', 'type' => EventType::Voorstelling->value]) }}"
                       class="btn-text">→ Volledige agenda</a>
                </p>
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
