@extends('layouts.app', [
    'title' => 'De mobiele dansstudio uitnodigen — Leon',
    'description' => 'Voor programmatoren en organisatoren die Leon\'s mobiele dansstudio een week of een seizoen op hun plek willen. Technische fiche, kostenkader, en hoe een boeking verloopt.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant A) --}}
    @include('partials.page-header', [
        'eyebrow' => 'Samenwerken',
        'title'   => 'De mobiele dansstudio uitnodigen',
        'lede'    => 'Voor programmatoren, organisatoren en gemeentediensten die de mobiele dansstudio een week of een seizoen op hun plek willen.',
    ])

    {{-- §2 Wat is de mobiele dansstudio? · 1-line digest + canonical deeplink to P-07 --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Wat is de mobiele dansstudio?</h2>
            <p class="mt-4">
                Een verplaatsbare dansvloer op een fietsaanhangwagen. We brengen hem
                naar pleinen, scholen en festivals — een dansplek die naar de mensen
                toe komt, niet andersom. De volledige beschrijving, de zomerformule
                en het beeldarchief vind je op de pagina van de mobiele dansstudio zelf.
            </p>
            <p class="mt-6">
                <a href="{{ route('dansateliers.mobiele-dansstudio') }}" class="btn-text">
                    → Lees meer over de mobiele dansstudio
                </a>
            </p>
        </div>
    </section>

    {{-- §3 Wanneer past het? · use-cases (4 contexts) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Wanneer past het?</h2>
            <p class="mt-4">
                De mobiele dansstudio werkt het best op plekken waar mensen al langs
                komen — pleinen, festivals, schoolpoorten, parken. Niet in een
                afgesloten zaal: het ding is gebouwd voor de open ruimte.
            </p>
            <ul class="mt-6 space-y-3">
                <li><strong class="font-medium">Festivals</strong> — als zichtbare dansplek tussen het programma door.</li>
                <li><strong class="font-medium">Publieke ruimte</strong> — pleinen, parken, woonwijken, marktdagen.</li>
                <li><strong class="font-medium">Zomerprogrammatie</strong> — een week of meer op één locatie, met dagelijkse momenten.</li>
                <li><strong class="font-medium">Projectweken</strong> — scholen, jeugdwerk, buurthuizen, vakantiekampen.</li>
            </ul>
        </div>
    </section>

    {{-- §4 Praktisch · technische fiche short-form + cost frame --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Praktisch</h2>

            <h3 class="mt-8">Technische fiche</h3>
            <ul class="mt-4 space-y-3">
                <li><strong class="font-medium">Afmetingen:</strong> [L × B × H] uitgeklapt · transport op een fietsaanhanger.</li>
                <li><strong class="font-medium">Stroom:</strong> standaard 230 V · opbouw door één of twee mensen.</li>
                <li><strong class="font-medium">Op- en afbouw:</strong> ongeveer [30 minuten] · binnen redelijke marge weersbestendig.</li>
                <li><strong class="font-medium">Vloer:</strong> [type] · geschikt voor blote voeten én dansschoenen.</li>
            </ul>
            <p class="mt-6">
                <a href="{{ route('dansateliers.mobiele-dansstudio') }}" class="btn-text">
                    → Volledige technische fiche (PDF) op de pagina van de mobiele dansstudio
                </a>
            </p>

            <h3 class="mt-12">Wat het kost</h3>
            <p class="mt-4">
                Een vergoeding in overleg, afhankelijk van duur, locatie en context.
                We hanteren geen vaste prijslijst — een week op een festival is iets
                anders dan een namiddag op een schoolplein. We bekijken het per
                aanvraag en sturen je een voorstel.
            </p>
        </div>
    </section>

    {{-- §5 Hoe verloopt een boeking · 3 steps --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Hoe verloopt een boeking</h2>
            <ol class="mt-6 space-y-6 list-decimal pl-6">
                <li>
                    <strong class="font-medium">Kennismaking.</strong>
                    Stuur ons een mail met je context: waar, wanneer en voor welk
                    publiek. We reageren binnen een week.
                </li>
                <li>
                    <strong class="font-medium">Fiche en afspraken.</strong>
                    We sturen de volledige technische fiche en maken een voorstel
                    voor duur, kost en op- en afbouw.
                </li>
                <li>
                    <strong class="font-medium">Datum vastleggen.</strong>
                    Eens we akkoord zijn, blokkeren we de datum en starten we de
                    praktische voorbereiding samen.
                </li>
            </ol>
        </div>
    </section>

    {{-- §6 Plan een boeking · SP-11 contact form (server-handled; replaces mailto stub) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            @include('partials.contact-form', [
                'heading'     => 'Plan een boeking',
                'intro'       => 'Laat ons weten wat je in gedachten hebt — we nemen binnen een week contact op met een eerste reactie.',
                'onderwerp'   => 'mobiele-dansstudio',
                'berichtHelp' => 'Vermeld gerust locatie, datum en doelpubliek.',
                'submitLabel' => 'Verstuur aanvraag',
            ])
        </div>
    </section>

@endsection
