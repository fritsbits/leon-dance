@php
    // §5 "In cijfers" — auto-pulled from Event model (per 30-structure)
    // No manual %-dashboard; three derived counts only.
    // Practice lineage (sinds 2010, binnen Ultima Vez) vs. de vzw (opgericht 2021).
    // Dn-26: claim altijd als split tonen, nooit kaal "16 jaar" voor de organisatie.
    $sinceYear = 2010;
    $yearsActive = now()->year - $sinceYear;      // de praktijk
    $vzwSince = 2021;
    $vzwYears = now()->year - $vzwSince;           // de vzw

    $partnerCount = \App\Models\Event::query()
        ->whereNotNull('partners')
        ->where('partners', '!=', '')
        ->pluck('partners')
        ->flatMap(fn ($csv) => array_map('trim', explode(',', (string) $csv)))
        ->filter()
        ->unique()
        ->count();

    $thisYearCount = \App\Models\Event::query()
        ->where('is_public', true)
        ->whereYear('starts_at', now()->year)
        ->count();
@endphp

@extends('layouts.app', [
    'title' => 'Impact',
    'description' => 'Hoe Leon werkt, en wie wat erover zegt: vier gebaren, een stem, een handvol cijfers. 16 jaar bezig, 5 jaar als vzw.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant A) --}}
    @include('partials.page-header', [
        'eyebrow' => 'Over Leon',
        'title'   => 'Impact',
        'lede'    => 'Wat doet zestien jaar samen dansen met een stad? Hier vertellen we hoe Leon werkt, en wie wat erover zegt.',
    ])

    {{-- §2 Hoe Leon impact maakt (4-beat method · Janssens & Steyaert) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-8">Hoe Leon impact maakt</h2>

            <div class="space-y-8">
                <div>
                    <h3>Uitnodigen</h3>
                    <p class="mt-3">
                        Leon zoekt mensen op waar ze al zijn. In de Pianofabriek, in een
                        wijkschool in Molenbeek, bij Ketmet of bij MUS-E. De uitnodiging
                        is plain: kom een keer langs, geen ervaring nodig, gratis. Wie
                        binnenstapt, hoeft niets te bewijzen.
                    </p>
                </div>

                <div>
                    <h3>Mengen</h3>
                    <p class="mt-3">
                        Een groep van ongeveer twintig mensen die elkaar anders niet zou
                        tegenkomen: een tiener uit Anderlecht, een gepensioneerde leraar,
                        iemand die net in Brussel woont. Tien weken samen repeteren maakt
                        een ander soort kennen mogelijk &mdash; geen netwerk-gesprek,
                        gewoon de oefening, naast elkaar.
                    </p>
                </div>

                <div>
                    <h3>Omkeren</h3>
                    <p class="mt-3">
                        Wie meedoet, danst. Geen <em>publiek</em>-rol, geen
                        <em>deelnemer</em>-categorie achter de hoofdcast. De voorstelling
                        toont mensen op de plek waar ze meestal niet staan &mdash; en
                        doet dat zonder ze als bijzonder geval te framen.
                    </p>
                </div>

                <div>
                    <h3>Bevestigen</h3>
                    <p class="mt-3">
                        Wat hier gemaakt is, telt. Op de scène van KVS, op de markt van
                        Cultureghem, in een klasagenda van een school in Sint-Jans-Molenbeek.
                        Bevestigen betekent: dit is niet &ldquo;een buurtproject als
                        oefening&rdquo; &mdash; dit is het werk.
                    </p>
                </div>
            </div>

            <p class="meta mt-12">Op basis van het werk van Janssens &amp; Steyaert over participatieve praktijk.</p>
        </div>
    </section>

    {{-- §3 Wat blijft hangen (proces · nazorg · continuïteit — prose, no sub-headings) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-8">Wat blijft hangen</h2>

            <div class="space-y-6">
                <p>
                    Een Mariage-editie duurt tien weken. Wat erna gebeurt, duurt vaak
                    jaren. De groep van twintig blijft elkaar opzoeken &mdash; bij de
                    volgende open repetitie, bij een editie in een andere stad, bij een
                    editie van een ander Leon-project. Sommigen komen terug als kern in
                    de volgende editie; anderen komen langs in Atelier Leon op zondag.
                </p>

                <p>
                    Voor partner-organisaties &mdash; een school, een welzijnsdienst, een
                    zorgcentrum &mdash; gaat het verder dan de voorstelling. De begeleider
                    die meedanste, doet het volgende schooljaar nog steeds bewegings-
                    oefeningen met dezelfde klas. <em>Leon</em> staat op het rapport van
                    de Cardijnschool als vak. Wat in tien weken is opgebouwd, blijft daar
                    hangen waar het is begonnen.
                </p>

                <p>
                    Op stadsniveau telt het op. Sinds {{ $sinceYear }} zijn er voorstellingen
                    geweest in zeven Brusselse gemeenten en in zes andere steden. Er is
                    een agenda die elke week iets toont, een netwerk dat zichzelf onderhoudt,
                    en een manier van werken die door anderen in andere steden wordt
                    opgepikt. Continuïteit hier betekent: niet de zoveelste eenmalige
                    actie, maar een praktijk die door blijft lopen.
                </p>
            </div>
        </div>
    </section>

    {{-- §4 Quote (SP-12 variant B standalone) · re-used from P-05 Mariage §5 by design --}}
    <section class="section border-t border-[var(--color-border)]">
        @include('partials.quote', [
            'variant'     => 'standalone',
            'quote'       => 'Ik kan er mezelf zijn en ik ontmoet mensen die ik anders nooit zou tegenkomen.',
            'attribution' => 'Hadja, 67',
            'context'     => 'Mariage Brussel 2024',
        ])
    </section>

    {{-- §5 In cijfers (auto-pulled from Event model · no manual dashboard) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-8">In cijfers</h2>

            <dl class="grid grid-cols-[auto_1fr] gap-x-6 gap-y-4">
                <dt class="text-3xl md:text-4xl font-medium text-[var(--color-text)] tabular-nums text-right">{{ $yearsActive }}</dt>
                <dd class="self-center text-[var(--color-text-muted)]">jaar samen dansen in Brussel, sinds {{ $sinceYear }} (eerst binnen Ultima Vez)</dd>

                <dt class="text-3xl md:text-4xl font-medium text-[var(--color-text)] tabular-nums text-right">{{ $vzwYears }}</dt>
                <dd class="self-center text-[var(--color-text-muted)]">jaar als eigen vzw, sinds {{ $vzwSince }}</dd>

                <dt class="text-3xl md:text-4xl font-medium text-[var(--color-text)] tabular-nums text-right">{{ $partnerCount }}</dt>
                <dd class="self-center text-[var(--color-text-muted)]">
                    partner-{{ $partnerCount === 1 ? 'organisatie' : 'organisaties' }}, uit de huidige agenda
                </dd>

                <dt class="text-3xl md:text-4xl font-medium text-[var(--color-text)] tabular-nums text-right">{{ $thisYearCount }}</dt>
                <dd class="self-center text-[var(--color-text-muted)]">
                    {{ $thisYearCount === 1 ? 'activiteit' : 'activiteiten' }} in {{ now()->year }}, publiek in de agenda
                </dd>
            </dl>

            <p class="meta mt-8">
                Cijfers uit de <a href="{{ route('agenda') }}">agenda</a>, live bijgehouden.
            </p>
        </div>
    </section>

    {{-- §6 Photo (SP-13 variant B contained) · collapses if no asset (Dn-20 guard) --}}
    @include('partials.photo-block', [
        'variant' => 'contained',
        'src'     => asset('img/leon-studio-intergen-walk-cruzz9220.webp'),
        'alt'     => 'Intergenerationele wandeloefening in de studio: een oudere man danst samen met kinderen.',
        'credit'  => '© Cruzz Taylor',
        'caption' => 'Atelier Leon, Pianofabriek',
    ])

@endsection
