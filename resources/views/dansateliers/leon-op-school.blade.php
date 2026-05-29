@extends('layouts.app', [
    'title' => 'Leon op school',
    'description' => 'Een dansbegeleiding van zes maanden, wekelijks twee uur, voor scholen, welzijnswerk en zorg. Een vaste danser werkt met een vaste groep, naar een gedeeld sluitmoment toe.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant B — header + SP-13 sibling) --}}
    @include('partials.page-header', [
        'eyebrow' => 'Dansateliers & performances · Ateliers op school',
        'title'   => 'Leon op school',
        'lede'    => 'Een dansbegeleiding van zes maanden, wekelijks, voor scholen, welzijnswerk en zorg. Twee uur per week, samen met een vaste groep, naar een gedeeld sluitmoment toe.',
    ])

    {{-- §2 Photo (SP-13) · klas-in-beweging tijdens een atelier op school --}}
    @include('partials.photo-block', [
        'src'    => asset('img/leon-in-de-klas-bench-leader-mvg3.webp'),
        'alt'    => 'Een man staat op een bank met de armen omhoog en gaat voor met een groep tieners in een atelier op school.',
        'credit' => '© Matthias Van Gysel',
    ])

    {{-- §3 Wat is Leon op school? (format-doc + 3 traject-beats) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Wat is Leon op school?</h2>
            <p class="mt-4">
                Leon komt zes maanden lang elke week langs in jullie school, zorgcentrum
                of organisatie. Een vaste danser werkt met dezelfde groep, een klas,
                een leefgroep, een buurtgroep, in dezelfde ruimte, op dezelfde dag van
                de week. We bouwen samen naar één moment toe.
            </p>

            <h3 class="mt-12">Kennismaking</h3>
            <p class="mt-3">
                Voor er iets vastligt komt Leon eerst langs. Een gesprek met de
                coördinator, een eerste sessie met de groep, geen voorwaarden, geen
                inschrijving. Pas daarna beslissen we samen of het past.
            </p>

            <h3 class="mt-8">Wekelijkse sessies</h3>
            <p class="mt-3">
                Eén vaste sessie per week, twee uur lang, met dezelfde danser en dezelfde
                groep. De begeleiders van de organisatie, leerkrachten, opvoeders,
                zorgkundigen, dansen mee. Niet als toeschouwer, niet als bewaker: als
                deelnemer. Dat verandert wat er gebeurt.
            </p>

            <h3 class="mt-8">Sluitmoment</h3>
            <p class="mt-3">
                Hoe we afsluiten beslissen we samen met de groep. Soms wordt het een
                publieke voorstelling, soms een toonmoment voor familie en collega's,
                soms gewoon een laatste sessie waar we eten en napraten. Geen
                voorwaarde, wel een ritueel.
            </p>
        </div>
    </section>

    {{-- §4 Voor wie (3 sectoren — scholen / welzijn / zorg) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Voor wie</h2>

            <h3 class="mt-8">Scholen</h3>
            <p class="mt-3">
                Basisscholen, secundair onderwijs, BUSO. Een klas, een graad, een
                schoolwerking. We werkten eerder met BUSO Cardijnschool en GBS Kameleon.
            </p>

            <h3 class="mt-8">Welzijn</h3>
            <p class="mt-3">
                Buurtwerk, jeugdwelzijnswerk, opvoedingsondersteuning. Een leefgroep,
                een buurtgroep, een werking die wekelijks samenkomt.
            </p>

            <h3 class="mt-8">Zorg</h3>
            <p class="mt-3">
                Woonzorgcentra, dagcentra, dagopvang. Een vaste leefgroep met vaste
                begeleiders, die samen het ritme van zes maanden kunnen dragen.
            </p>
        </div>
    </section>

    {{-- §5 Partner-stem (SP-12 variant A · inline frame · standalone section)
         Inlined here; no shared partial yet — SP-12 still 🟠 first draft in 41-patterns,
         second use of pattern (P-05 will be the third). Promote to partials/quote.blade.php
         when a third caller arrives. --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <figure class="bg-[var(--color-surface-muted)] rounded-[var(--radius)] p-8 md:p-12">
                <blockquote class="text-lg">
                    &ldquo;Het atelier is een plek waar je anders kan communiceren: met
                    je handen, voeten en hoofd.&rdquo;
                </blockquote>
                <figcaption class="meta mt-4">— Els Schoemaker · BUSO Cardijnschool</figcaption>
            </figure>
        </div>
    </section>

    {{-- §6 Contact hook — Leon op school bij jullie? --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Leon op school bij jullie?</h2>
            <p class="mt-4">
                Een traject begint met een vrijblijvende kennismaking, bij jullie op
                locatie, met de groep, zonder voorwaarden vooraf.
            </p>
            <div class="mt-8">
                <a href="{{ route('samenwerken.opzetten') }}" class="btn-primary">Plan een gesprek</a>
            </div>
        </div>
    </section>

@endsection
