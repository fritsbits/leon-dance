@extends('layouts.app', [
    'title' => 'Contact',
    'description' => 'Mail ons op hello@leon.dance, bel +32 456 91 26 41, kom langs in Sint-Jans-Molenbeek, of laat meteen een bericht achter.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant A) --}}
    @include('partials.page-header', [
        'eyebrow' => 'Over Leon',
        'title'   => 'Contact',
        'lede'    => 'Mail, bel of kom langs. Of laat hieronder meteen een bericht achter — we komen er snel op terug.',
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

    {{-- §3 Stuur ons een bericht · SP-11 contact form (algemeen, primary action) --}}
    <section class="section border-t border-[var(--color-border)]">
        @include('partials.contact-form', [
            'heading'   => 'Stuur ons een bericht',
            'intro'     => 'Een vraag, een idee, of gewoon even kennismaken? Laat het hier weten — we komen er snel op terug.',
            'onderwerp' => 'algemeen',
        ])
        <div class="container-text mt-8">
            <p class="meta">
                Werk je aan een project of wil je de mobiele dansstudio boeken? Daar hoort een eigen pagina bij:
                <a href="{{ route('samenwerken.opzetten') }}">een project opzetten</a> ·
                <a href="{{ route('samenwerken.uitnodigen') }}">de mobiele dansstudio</a>.
            </p>
        </div>
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
