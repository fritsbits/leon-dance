@extends('layouts.app', [
    'title' => 'Contact',
    'description' => 'Mail ons op hello@leon.dance, bel +32 456 91 26 41, of kom langs op het bureau in Sint-Jans-Molenbeek. Drie ingangen voor specifieke vragen: een project opzetten, de mobiele dansstudio boeken, of meedoen.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant A) --}}
    @include('partials.page-header', [
        'eyebrow' => 'Over Leon',
        'title'   => 'Contact',
        'lede'    => 'Mail, bel of kom langs. Heb je een specifieke vraag — een project opzetten, de mobiele dansstudio boeken, meedoen — kies dan hieronder de juiste ingang.',
    ])

    {{-- §2 Algemeen (general contact details) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Algemeen</h2>

            <div class="grid md:grid-cols-3 gap-8 max-w-[var(--max-content)]">
                <div>
                    <h3>Stuur een mail</h3>
                    <p class="mt-3">
                        <a href="mailto:hello@leon.dance">hello@leon.dance</a>
                    </p>
                </div>

                <div>
                    <h3>Of bel ons</h3>
                    <p class="mt-3">
                        <a href="tel:+32456912641">+32 456 91 26 41</a>
                    </p>
                </div>

                <div>
                    <h3>Of stuur een kaartje</h3>
                    <address class="not-italic mt-3 text-[var(--color-text-muted)]">
                        Leon vzw<br>
                        Weilandstraat 46<br>
                        1082 Bruxelles
                    </address>
                    <p class="meta mt-3">BTW 0769.579.192</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §3 Met een specifieke vraag (routing list) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Met een specifieke vraag</h2>

            <ul class="border-t border-[var(--color-border-subtle)] max-w-[var(--max-content)]">
                @foreach ([
                    [
                        'href'  => route('samenwerken.opzetten'),
                        'label' => 'Werk samen aan een project',
                        'sub'   => 'Een participatief dansproject opzetten met je groep, school, organisatie of stad.',
                        'tag'   => null,
                    ],
                    [
                        'href'  => route('samenwerken.uitnodigen'),
                        'label' => 'Boek de mobiele dansstudio',
                        'sub'   => 'Een verplaatsbare dansruimte boeken voor een week, een festival of een zomerformule.',
                        'tag'   => null,
                    ],
                    [
                        'href'  => route('agenda'),
                        'label' => 'Doe mee als deelnemer',
                        'sub'   => 'Kom langs in Atelier Leon, schrijf je in voor een editie, of bekijk wat eraan komt in de agenda.',
                        'tag'   => null,
                    ],
                    [
                        'href'  => route('samenwerken.doen'),
                        'label' => 'Word vrijwilliger of stagiair',
                        'sub'   => 'Meewerken aan repetities, voorstellingen of dagelijkse werking.',
                        'tag'   => 'in voorbereiding',
                    ],
                ] as $row)
                    <li class="border-b border-[var(--color-border-subtle)]">
                        <a href="{{ $row['href'] }}"
                           class="block py-4 no-underline hover:bg-[var(--color-hover)]">
                            <span class="block font-medium">→ {{ $row['label'] }}</span>
                            <span class="meta block mt-1">
                                {{ $row['sub'] }}
                                @if ($row['tag'])
                                    <span class="ml-1">[{{ $row['tag'] }}]</span>
                                @endif
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- §3.5 Of stuur ons meteen een bericht · SP-11 contact form (algemeen) --}}
    <section class="section border-t border-[var(--color-border)]">
        @include('partials.contact-form', [
            'heading'   => 'Of stuur ons meteen een bericht',
            'intro'     => 'Geen specifieke ingang nodig? Laat hier je vraag achter — we komen er snel op terug.',
            'onderwerp' => 'algemeen',
        ])
    </section>

    {{-- §4 Bezoekadres (visit address + map placeholder + open-atelier drop-ins) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Kom langs op het bureau</h2>

            <div class="grid md:grid-cols-2 gap-8 max-w-[var(--max-content)]">
                <div>
                    <address class="not-italic text-[var(--color-text-muted)]">
                        <span class="font-medium text-[var(--color-text)]">Lion City</span><br>
                        Ossegemstraat 53<br>
                        1080 Sint-Jans-Molenbeek
                    </address>

                    <h3 class="mt-12">Of vind ons in een open atelier</h3>
                    <ul class="mt-3 space-y-2">
                        <li><span class="font-medium">Woensdag</span> · Pianofabriek, rue du Fortstraat 35, 1060 Sint-Gillis</li>
                        <li><span class="font-medium">Zaterdag</span> · Maison des Cultures, 1080 Sint-Jans-Molenbeek</li>
                    </ul>
                </div>

                {{-- Map placeholder · per CLAUDE.md "Maps: OpenStreetMap + Leaflet.js only".
                     Leaflet not yet bootstrapped in app.js — see brief BG-5 + gap #6.
                     V1: bordered block + real OSM deep-link so visit-address is useful without JS. --}}
                <div>
                    <div class="aspect-[16/9] border border-[var(--color-border)] rounded-[var(--radius)] bg-[var(--color-surface-muted)] flex flex-col items-center justify-center text-center p-6">
                        <p class="meta">Kaartje (OpenStreetMap, Leaflet) — landt in Surface</p>
                        <p class="mt-3">
                            <a href="https://www.openstreetmap.org/?mlat=50.8616&amp;mlon=4.3300&amp;zoom=17"
                               rel="noopener"
                               target="_blank"
                               class="btn-text">Bekijk op OpenStreetMap →</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
