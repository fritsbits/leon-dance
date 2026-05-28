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

    {{-- §2 Contact — direct details (left) + message form (right, primary action) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <div class="grid md:grid-cols-[1fr_1.6fr] gap-12 lg:gap-16 items-start max-w-[var(--max-content)]">
                {{-- left: direct contact details + booking pointer --}}
                <div>
                    <h2 class="mb-6">Mail of bel ons</h2>
                    <div class="space-y-4">
                        <p>
                            <span class="meta block">Mail</span>
                            <a href="mailto:hello@leon.dance">hello@leon.dance</a>
                        </p>
                        <p>
                            <span class="meta block">Bel</span>
                            <a href="tel:+32456912641">+32 456 91 26 41</a>
                        </p>
                        <p>
                            <span class="meta block">Post</span>
                            <span class="text-[var(--color-text)]">Leon vzw · Weilandstraat 46 · 1082 Brussel</span>
                            <span class="meta block mt-1">maatschappelijke zetel · BTW 0769.579.192</span>
                        </p>
                    </div>
                    <p class="meta mt-8">
                        Werk je aan een project of wil je de mobiele dansstudio boeken? Daar hoort een eigen pagina bij:
                        <a href="{{ route('samenwerken.opzetten') }}">een project opzetten</a> ·
                        <a href="{{ route('samenwerken.uitnodigen') }}">de mobiele dansstudio</a>.
                    </p>
                </div>

                {{-- right: message form (primary) --}}
                <div>
                    @include('partials.contact-form', [
                        'heading'     => 'Stuur ons een bericht',
                        'intro'       => 'Een vraag, een idee, of even kennismaken?',
                        'onderwerp'   => 'algemeen',
                        'submitLabel' => 'Verstuur bericht',
                    ])
                </div>
            </div>
        </div>
    </section>

    {{-- §3 Kom langs — visit address + open-atelier drop-ins + live OSM map --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Kom langs op het bureau</h2>

            <div class="grid md:grid-cols-2 gap-8 items-stretch max-w-[var(--max-content)]">
                <div>
                    <address class="not-italic text-[var(--color-text-muted)]">
                        <span class="font-medium text-[var(--color-text)]">Lion City</span> <span class="meta">— bezoekadres</span><br>
                        Ossegemstraat 53<br>
                        1080 Sint-Jans-Molenbeek
                    </address>

                    <h3 class="mt-12">Of vind ons in een open atelier</h3>
                    <ul class="mt-3 space-y-2">
                        <li><span class="font-medium">Woensdag</span> · Pianofabriek, rue du Fortstraat 35, 1060 Sint-Gillis</li>
                        <li><span class="font-medium">Zaterdag</span> · Maison des Cultures, 1080 Sint-Jans-Molenbeek</li>
                    </ul>
                </div>

                {{-- Live OpenStreetMap via Leaflet (resources/js/app.js). No-JS falls back to the
                     deep-link below. Per CLAUDE.md: OpenStreetMap + Leaflet only; grayscale via .map. --}}
                <div data-leaflet-map
                     data-lat="50.8616" data-lng="4.3300" data-zoom="16"
                     data-label="Leon vzw · Lion City, Ossegemstraat 53"
                     class="map">
                    <noscript>
                        <div class="flex h-full items-center justify-center p-6 text-center">
                            <a href="https://www.openstreetmap.org/?mlat=50.8616&amp;mlon=4.3300#map=16/50.8616/4.3300"
                               rel="noopener" target="_blank" class="btn-text">Bekijk op OpenStreetMap →</a>
                        </div>
                    </noscript>
                </div>
            </div>
        </div>
    </section>

@endsection
