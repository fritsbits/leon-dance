@php
    \Carbon\Carbon::setLocale('nl');

    $venue = $atelier->venue;
    $dayLower = mb_strtolower($atelier->dayLabel());
    $upcoming = $atelier->upcomingEvents(6);
    $startLabel = \Illuminate\Support\Str::before($atelier->timeRange(), '–');

    $agendaHref = route('agenda', ['practice' => 'atelier-leon']);

    // Exterior photo of the venue (uploaded via Filament → public disk, served through the
    // storage symlink). asset() uses the request host, so it works on leon.test even though
    // the disk's configured url points at APP_URL. Collapses when not set.
    $photoUrl = $venue?->photo ? asset('storage/'.$venue->photo) : null;
    // Language-neutral route directions, no per-instance copy to write or translate.
    $routeHref = ($venue?->lat && $venue?->lng)
        ? 'https://www.openstreetmap.org/directions?to='.$venue->lat.','.$venue->lng
        : null;
@endphp

@extends('layouts.app', [
    'title'       => $atelier->titleWithVenue().': wekelijks open dansatelier',
    'description' => 'Atelier Leon in '.($venue?->name ?? 'Brussel').': elke '.$dayLower.' van '.$atelier->timeRange().'. Gratis, zonder inschrijving, geen ervaring nodig. Kom gewoon langs.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant A) · eyebrow links back up to the Atelier Leon overview --}}
    @include('partials.page-header', [
        'eyebrow'     => 'Atelier Leon',
        'eyebrowHref' => route('dansateliers.atelier-leon'),
        'title'       => $atelier->titleWithVenue(),
        'lede'        => 'Elke '.$dayLower.' samen dansen in '.($venue?->name ?? 'Brussel')
                          .($venue?->area ? ' ('.$venue->area.')' : '').'. Gratis, zonder inschrijving. Kom gewoon langs.',
    ])

    {{-- §2 Praktisch + buitenkant-foto (links, bij het adres) · kaart (rechts, vult de
         kolomhoogte). Foto is functioneel (herkenning), klein bij het adres; de kaart stretcht
         mee zodat er geen witgat onder de tekst valt. --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Waar en wanneer</h2>

            <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-stretch max-w-[var(--max-content)]">
                <div>
                    {{-- Standing cadence only. The concrete upcoming dates live in the
                         "Eerstvolgende keren hier"-section — one home for dates. --}}
                    <p class="font-medium">Elke {{ $dayLower }} · {{ $atelier->timeRange() }}</p>

                    @if ($venue)
                        <address class="not-italic mt-4 text-[var(--color-text-muted)]">
                            <span class="font-medium text-[var(--color-text)]">{{ $venue->name }}</span>
                            @if ($venue->area)<span class="meta"> ({{ $venue->area }})</span>@endif<br>
                            {{ $venue->address }}
                        </address>
                        @if ($routeHref)
                            <p class="mt-3">
                                <a href="{{ $routeHref }}" rel="noopener" target="_blank" class="btn-text">Plan je route →</a>
                            </p>
                        @endif
                    @endif

                    {{-- Buitenkant-foto: klein, bij het adres (herkenning bij aankomst). --}}
                    @if ($photoUrl)
                        <figure class="mt-8">
                            <div class="aspect-[3/2] bg-[var(--color-border-subtle)] rounded-[var(--radius)] overflow-hidden">
                                <img src="{{ $photoUrl }}"
                                     alt="De buitenkant van {{ $venue->name }}{{ $venue->area ? ' in '.$venue->area : '' }}, zodat je het gebouw herkent."
                                     class="w-full h-full object-cover">
                            </div>
                            @if ($venue->photo_credit)
                                <figcaption class="meta mt-2">{{ $venue->photo_credit }}</figcaption>
                            @endif
                        </figure>
                    @endif

                    @if ($atelier->lead)
                        <h3 class="mt-10">Wie begeleidt?</h3>
                        <p class="mt-2">Je wordt onthaald door {{ $atelier->lead }}.</p>
                    @endif

                    <h3 class="mt-10">Wat breng je mee?</h3>
                    <p class="mt-2">Kledij waarin je makkelijk beweegt en een fles water.</p>
                </div>

                {{-- Kaart (locatie): stretcht mee met de tekstkolom (items-stretch + height:100%). --}}
                @if ($venue?->lat && $venue?->lng)
                    @include('partials.map', [
                        'lat'   => $venue->lat,
                        'lng'   => $venue->lng,
                        'label' => $venue->name.' · '.$venue->address,
                        'zoom'  => 15,
                    ])
                @else
                    <div class="map flex items-center justify-center p-6 text-center">
                        <p class="meta">[Kaart: zodra de coördinaten van {{ $venue?->name ?? 'de zaal' }} bevestigd zijn.]</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- §3 Eerstvolgende hier · venue-scoped, so we drop the redundant "Atelier Leon · Pianofabriek"
         that the merged agenda-list (SP-08) would repeat on every row. The reader already knows the spot. --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-6">Eerstvolgende keren hier</h2>

            @if ($upcoming->isEmpty())
                <p class="meta max-w-[var(--max-content)]">
                    Nog geen dates ingepland. Kom gewoon langs op {{ $dayLower }}, of kijk in de
                    <a href="{{ $agendaHref }}">agenda</a>.
                </p>
            @else
                <ul class="border-t border-[var(--color-border-subtle)] max-w-[var(--max-content)]">
                    @foreach ($upcoming as $event)
                        <li class="flex items-baseline gap-4 py-3 border-b border-[var(--color-border-subtle)]">
                            <span class="font-medium">{{ ucfirst($event->starts_at->isoFormat('dddd D MMMM')) }}</span>
                            <span class="meta">{{ $event->starts_at->format('H:i') }}</span>
                        </li>
                    @endforeach
                </ul>
                <p class="mt-6"><a href="{{ $agendaHref }}" class="btn-text">→ Alle open ateliers in de agenda</a></p>
            @endif
        </div>
    </section>

    {{-- §4 De eerste keer (aankomst-specifiek, vult P-03 "Voor wie?" aan, herhaalt het niet) ·
         tweekoloms: tekst links, een onthaalbeeld rechts (SP-13-variant, studiosfeer). --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-stretch max-w-[var(--max-content)]">
                <div>
                    <h2>De eerste keer hier</h2>
                    <p class="mt-6">
                        Kom een paar minuten voor {{ $startLabel }} langs. Er is altijd iemand die je bij
                        de ingang opvangt en je de weg wijst naar de zaal. Je hoeft niemand te kennen, je hoeft
                        niets voor te bereiden, en je hoeft je nergens te melden.
                    </p>
                    <p class="mt-4">
                        Sta je om {{ $startLabel }} wat verloren in de zaal? Dat hoort erbij. Zoek een plek,
                        kijk even rond, en stap mee in zodra de opwarming begint. Na afloop dans je weer naar
                        buiten, of je blijft nog wat napraten.
                    </p>

                    <h3 class="mt-10">Ik twijfel of het iets voor mij is</h3>
                    <p class="mt-2">
                        Kom dan gewoon eens kijken en doe mee zoveel je wil. Bevalt het niet, dan vertrek je weer.
                        Wie nog nooit gedanst heeft is even welkom als wie het al jaren doet.
                    </p>

                    <p class="meta mt-10">
                        Meer over wat een open atelier is en voor wie, lees je op de pagina
                        <a href="{{ route('dansateliers.atelier-leon') }}">Atelier Leon</a>.
                    </p>
                </div>

                <div class="aspect-[4/3] md:aspect-auto md:h-full min-h-[14rem] bg-[var(--color-border-subtle)] rounded-[var(--radius)] overflow-hidden">
                    <img src="{{ asset('img/atelier-leon-pink-trousers-joy-dkeyzer1.webp') }}"
                         alt="Mensen van verschillende leeftijden dansen lachend samen, ieder op zijn eigen manier, niemand staat in het midden."
                         class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

@endsection
