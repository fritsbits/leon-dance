@extends('layouts.app', [
    'title' => 'Dansateliers & performances',
    'description' => 'Dans zelf mee in een wekelijks atelier of een voorstelling, of nodig Leon uit op jouw school, in de zorg of in je buurt.',
])

@php
    // Open-call awareness for the Mariage on-ramp (SP-16 chip sibling) — same query as work-grid.
    $openCallEditie = \App\Models\Edition::query()
        ->whereHas('project', fn ($q) => $q->where('slug', 'mariage'))
        ->openInschrijving()
        ->orderBy('starts_at')
        ->first();
@endphp

@section('content')

    {{-- §1 Hero (beeldgedragen · D-1) — asymmetric: tekst + contained beeld, koptekst hoog.
         Geen transactionele CTA (D-2). Longevity-cijfer pulled per Dn-26. --}}
    <section class="section">
        <div class="container-wide">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
                {{-- Hero: intergenerationeel dansen in de publieke ruimte --}}
                <div class="order-1 md:order-2 aspect-[4/3] bg-[var(--color-border-subtle)] rounded-[var(--radius)] overflow-hidden">
                    <img src="{{ asset('img/square-elder-red-trousers-clap-circle.webp') }}" alt="Een oudere vrouw in een rode broek danst mee in een klapcirkel op een plein, mensen van verschillende leeftijden rondom." class="w-full h-full object-cover">
                </div>
                <div class="order-2 md:order-1">
                    <p class="meta uppercase tracking-wide mb-3">Dansateliers &amp; performances</p>
                    <h1>Doe mee met Leon</h1>
                    <p class="mt-4 text-lg">
                        Dans zelf mee in een wekelijks atelier of een voorstelling. Of nodig Leon uit
                        op jouw school, in de zorg of in je buurt. Geen ervaring nodig, je lijf volstaat.
                    </p>
                    <p class="meta mt-6">In Brussel, elke week, op verschillende plekken in de stad.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §2 Spoor 1: Doe zelf mee (individu / P1) — primaire spoor, beeld-voorop, meeste presence --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2>Doe zelf mee</h2>

            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center mt-8">
                {{-- Deelnemer-foto · met deelnemer-quote als ingetogen caption (E) --}}
                <div>
                    <div class="aspect-[4/3] bg-[var(--color-border-subtle)] rounded-[var(--radius)] overflow-hidden">
                        <img src="{{ asset('img/leon-studio-intergen-walk-cruzz9220.webp') }}" alt="Intergenerationele wandeloefening in de studio: een oudere man en kinderen bewegen samen door de ruimte." class="w-full h-full object-cover">
                    </div>
                    {{-- [client] gap #2: deelnemer-quote (P1-stem). Canonieke deelnemer = Hadja
                         (15-impact BG-5), consent-pending → rol-attributie tot bevestigd. --}}
                    <figure class="mt-4">
                        <blockquote class="leading-snug text-[var(--color-text-muted)]">
                            &ldquo;Ik had nog nooit gedanst. Vanaf de eerste keer voelde ik me welkom.&rdquo;
                        </blockquote>
                        <figcaption class="meta mt-2">&mdash; een deelnemer van Atelier Leon</figcaption>
                    </figure>
                </div>
                <p class="text-lg">
                    Samen dansen met mensen die je anders nooit zou tegenkomen.
                    Iedereen kan mee, ook als je nog nooit danste.
                </p>
            </div>

            {{-- Bridge + on-ramps (C). Spoor 1 = emotioneel register: warme, uitnodigende
                 kaartteksten, geen feiten-fiches (die horen bij de evaluerende org-lezer in §3). --}}
            <p class="font-medium mt-12 mb-6">Twee manieren om zelf te dansen:</p>
            <ul class="grid md:grid-cols-2 gap-6">
                <li>@include('partials.project-card', [
                    'href'             => route('dansateliers.atelier-leon'),
                    'title'            => 'Atelier Leon',
                    'desc'             => 'Elke week samen dansen, in Sint-Gillis en Molenbeek. Gratis, geen ervaring nodig, kom gewoon langs.',
                    'image'            => asset('img/atelier-leon-square-laugh-sing-2021.webp'),
                    'imageAlt'         => 'Een lachende man en een zingende jongeman op een geplaveid plein tijdens Atelier Leon.',
                ])</li>
                {{-- Mariage — open-call chip indien open (dynamisch) --}}
                <li>@include('partials.project-card', [
                    'href'             => route('dansateliers.mariage'),
                    'title'            => 'Mariage',
                    'desc'             => 'Een voorstelling die je samen met een groep uit je eigen stad maakt. Kom kijken, of dans mee.',
                    'badge'            => $openCallEditie ? 'open call' : null,
                    'image'            => asset('img/mariage-procession-white-dancer-mvg3.webp'),
                    'imageAlt'         => 'Mariage-processie op een plein: een danser in het wit en vrouwen arm in arm.',
                ])</li>
            </ul>

            {{-- Agenda-haak (D-7) — leeft in spoor 1, geen aparte slotsectie --}}
            <p class="mt-6"><a href="{{ route('agenda') }}" class="btn-text">&rarr; Bekijk wat er deze week loopt</a></p>
        </div>
    </section>

    {{-- §3 Spoor 2: Breng Leon naar jouw plek (organisatie / P3·P4) — secundair, tekst-voorop,
         lichtere band. Coördinator-stem (Schoemaker) hoort hier (Q3). --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2>Breng Leon naar jouw plek</h2>

            <div class="grid md:grid-cols-5 gap-8 md:gap-12 items-center mt-8">
                <div class="md:col-span-3">
                    <p class="text-lg">
                        Leon komt naar je school, je zorgcentrum of je buurt en maakt samen met je groep
                        een dansvoorstelling. Geen losse workshop, maar weken samen, met aandacht voor
                        wat daarna blijft.
                    </p>
                    <p class="mt-4">Zie hoe scholen, zorginstellingen en buurten Leon al naar hun plek haalden.</p>
                    {{-- [client] gap #2: coördinator-quote (P4-stem). ⚠️ rol + org-type + consent
                         bij team bevestigen (wiki: "coördinator", org = Cardijn). --}}
                    <figure class="mt-6">
                        <blockquote class="leading-snug text-[var(--color-text-muted)]">
                            &ldquo;Het atelier is een plek waar je anders kan communiceren: met je handen, voeten en hoofd.&rdquo;
                        </blockquote>
                        <figcaption class="meta mt-2">&mdash; Els Schoemaker, coördinator bij Cardijn</figcaption>
                    </figure>
                </div>
                {{-- Foto op locatie — kleiner dan spoor 1 (secundair) --}}
                <div class="md:col-span-2 aspect-[3/2] bg-[var(--color-border-subtle)] rounded-[var(--radius)] overflow-hidden">
                    <img src="{{ asset('img/leon-in-de-klas-chair-balance-mvg1.webp') }}" alt="Tieners en een vrouw balanceren op stoelen in een studio tijdens een traject op locatie, een man in het oranje begeleidt." class="w-full h-full object-cover">
                </div>
            </div>

            {{-- Bridge + on-ramps — twee benoemde routes only (D-6) --}}
            <p class="font-medium mt-10 mb-6">Twee manieren om Leon bij jou te brengen:</p>
            <ul class="grid md:grid-cols-2 gap-6">
                <li>@include('partials.project-card', [
                    'href'             => route('dansateliers.leon-op-school'),
                    'title'            => 'Leon op school',
                    'desc'             => 'Samen dansen met je klas of groep, op jullie eigen plek: school, welzijn of zorg.',
                    'image'            => asset('img/leon-in-de-klas-bench-leader-mvg3.webp'),
                    'imageAlt'         => 'Een man staat op een bank met de armen omhoog en leidt een groep tieners in een ruimte op school.',
                ])</li>
                <li>@include('partials.project-card', [
                    'href'             => route('dansateliers.mobiele-dansstudio'),
                    'title'            => 'Mobiele dansstudio',
                    'desc'             => 'Een verplaatsbare dansruimte die we naar je plek brengen: een plein, een school, een festival.',
                    'imagePlaceholder' => '[Beeld — de studio op locatie]',
                ])</li>
            </ul>
        </div>
    </section>

@endsection
