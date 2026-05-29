@php
    // §3 Tijdlijn data — static for v0.1 (no Milestone model yet; deferred).
    // Source: 42-briefs/17-historiek-content.md · derived from
    // discovery/21-organisation.md (KBO + ultimavez.com / kvs.be / lamonnaiedemunt.be).
    $tijdlijn = [
        ['year' => '2010', 'text' => 'Seppe Baeyens start als choreograaf binnen Ultima Vez.'],
        ['year' => '2015', 'text' => '<em>Tornar</em> (Ultima Vez): eerste grote intergenerationele participatieve voorstelling.'],
        ['year' => '2017', 'text' => 'Atelier Quartier opent in de Maison des Cultures te Molenbeek: het wekelijkse open atelier dat de blauwdruk wordt voor Atelier Leon.'],
        ['year' => '2018', 'text' => '<em>INVITED</em> (Ultima Vez): geselecteerd voor het TheaterFestival.'],
        ['year' => '2021', 'text' => 'Leon vzw wordt opgericht (10 juni). <em>Birds</em> gaat in première als Ultima Vez-productie.'],
        ['year' => '2023', 'text' => 'Leon neemt de tour-directie van <em>Birds</em> over (De Munt, STUK, tanzhaus nrw, Festival de Marseille).'],
        ['year' => '2024', 'text' => '<em>Mariage</em> gaat in première op MolenFest in Molenbeek (21 september): eerste editie, eerste Leon-eigen productie. In november volgt een tweede editie op de Week van de Verbeelding in Gaasbeek.'],
        ['year' => '2025', 'text' => 'Leon wordt werkgever (1 januari). <em>Mariage</em> keert terug op MolenFest en sluit het jaar af op het Winterfeest van GC De Platoo in Koekelberg.'],
        ['year' => '2026', 'text' => '<em>Mariage</em> speelt bij Cultureghem in Anderlecht en als afsluiter van het Volt FESTIVAL bij BRONKS. Atelier Leon loopt wekelijks door in de Pianofabriek en de Maison des Cultures.'],
        ['year' => '2027', 'text' => '<em>Kosmos</em>: co-productie met KANAL — Centre Pompidou en KVS.'],
    ];

    // §5 Erkenning — juried selection list. Lineage-proxy only; NEVER "award-winning".
    // Source: Strategy VP P5 RTB · Dn-16 closure. Extra rijen pending Sam/Kristin (gap #2).
    $erkenning = [
        ['year' => '2019', 'text' => '<em>INVITED</em>, geselecteerd voor het TheaterFestival'],
    ];
@endphp

@extends('layouts.app', [
    'title'       => 'Historiek · Leon',
    'description' => 'Leon vzw bestaat sinds 2021. Het werk dat eraan voorafging (Atelier Quartier, Tornar, INVITED, Birds) liep sinds 2010 binnen Ultima Vez. Sinds 2024 maakt Leon eigen voorstellingen: Mariage, in 2027 gevolgd door Kosmos.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant A) --}}
    @include('partials.page-header', [
        'eyebrow' => 'Over Leon',
        'title'   => 'Historiek',
        'lede'    => 'Leon vzw bestaat sinds 2021. Het werk dat eraan voorafging (het wekelijkse open atelier, de grote participatieve voorstellingen) loopt al sinds 2010, eerst binnen Ultima Vez, sinds 2021 onder eigen naam.',
    ])

    {{-- §2 Waar Leon vandaan komt (lineage) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Waar Leon vandaan komt</h2>
            <p class="mt-6">
                Seppe Baeyens werkte sinds 2010 als choreograaf binnen Ultima Vez rond
                één aanhoudende vraag: hoe maak je een dansvoorstelling met mensen die
                geen dansers zijn? Daaruit groeiden de grote participatieve
                voorstellingen (<em>Tornar</em> 2015, <em>INVITED</em> 2018,
                <em>Birds</em> 2021) en, in januari 2017 in Molenbeek, een wekelijks
                open dansatelier zonder inschrijving, gratis, drempelloos. Atelier
                Quartier heette dat. Atelier Leon werkt vandaag volgens datzelfde model.
            </p>
            <p class="mt-4">
                In juni 2021 wordt die werking een eigen vzw onder de naam Leon,
                vernoemd naar de danser Leon Gyselinck (1923–2024). De participatieve
                praktijk verhuist mee; de nieuwe voorstellingen worden onder Leon
                gemaakt: <em>Mariage</em> vanaf 2024, <em>Kosmos</em> in 2027 als
                co-productie met KANAL — Centre Pompidou en KVS. Sinds januari 2025
                heeft Leon ook eigen mensen in loondienst.
            </p>
        </div>
    </section>

    {{-- §3 Tijdlijn --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Tijdlijn</h2>
            <ul class="mt-6 space-y-3">
                @foreach ($tijdlijn as $row)
                    <li class="flex flex-col md:flex-row md:gap-6">
                        <span class="meta md:w-16 md:shrink-0 md:pt-1">{{ $row['year'] }}</span>
                        <span>{!! $row['text'] !!}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- §4 Birds, Tornar, INVITED — werk uit de Ultima Vez-periode (afbakening) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2><em>Birds</em>, <em>Tornar</em>, <em>INVITED</em>: werk uit de Ultima Vez-periode</h2>
            <p class="mt-6">
                De drie grote participatieve voorstellingen waar Seppe Baeyens het meest
                mee verbonden wordt, zijn Ultima Vez-producties. Ze staan hier omdat ze
                deel uitmaken van het traject waar Leon uit voortkomt, niet omdat het
                Leon-producties zijn.
            </p>
            <p class="mt-4">
                <em>Birds</em> (2021) blijft een Ultima Vez-productie; Leon neemt sinds
                2023 de tour-directie. De voorstelling toerde onder die constellatie
                naar De Munt Brussel, STUK Leuven, tanzhaus nrw Düsseldorf en het
                Festival de Marseille.
            </p>
            <p class="mt-4">
                <em>INVITED</em> (2018) is een Ultima Vez-voorstelling met dramaturgie
                van Kristin Rogghe, geselecteerd door het TheaterFestival.
            </p>
            <p class="mt-4">
                <em>Tornar</em> (2015) was de eerste grote participatieve voorstelling
                binnen Ultima Vez, en de directe voorloper van <em>INVITED</em> en
                <em>Birds</em>.
            </p>
        </div>
    </section>

    {{-- §5 Erkenning · Anti-claim guard: NEVER "award-winning" / "bekroond" / implied
         Mariage critical acclaim (per Dn-16 closure + TOV verboden lijst). --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Erkenning</h2>
            <p class="mt-6">
                Leon is jong; het werk dat eraan voorafging werd door vakjuries
                opgepikt. De selecties hieronder zijn voor Ultima Vez-producties uit
                Seppe Baeyens' periode binnen die structuur: geen prijzen, een
                uitnodiging van vakgenoten om het werk te laten zien.
            </p>
            <ul class="mt-6 space-y-3">
                @foreach ($erkenning as $row)
                    <li class="flex flex-col md:flex-row md:gap-6">
                        <span class="meta md:w-16 md:shrink-0 md:pt-1">{{ $row['year'] }}</span>
                        <span>{!! $row['text'] !!}</span>
                    </li>
                @endforeach
            </ul>
            <p class="meta mt-4">Meer selecties pending team-bevestiging (Sam/Kristin).</p>
        </div>
    </section>

    {{-- §6 Photo (SP-13 variant B contained) · Mariage-première frame als historiek-anker
         (candidate; geen Atelier Quartier 2017-beeld in de catalogus). --}}
    @include('partials.photo-block', [
        'src'     => asset('img/mariage-facade-musicians-procession-mvg2.webp'),
        'alt'     => 'Optocht met muzikanten voor een monumentale gevel, kinderen op de trappen, tijdens Mariage.',
        'credit'  => '© Matthias Van Gysel',
        'caption' => 'Mariage, première op MolenFest in Molenbeek, 2024.',
        'variant' => 'contained',
    ])

@endsection
