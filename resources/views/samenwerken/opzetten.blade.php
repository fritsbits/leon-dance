@extends('layouts.app', [
    'title' => 'Participatief dansproject opzetten — Leon',
    'description' => 'Wil je samen met Leon een participatief dansproject opzetten in jouw stad, school of organisatie? Plan een vrijblijvend gesprek.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant A) --}}
    @include('partials.page-header', [
        'eyebrow' => 'Samenwerken',
        'title'   => 'Een participatief dansproject opzetten',
        'lede'    => 'Wil je samen met Leon iets opzetten in jouw stad, school of organisatie? Dat begint met een gesprek — vrijblijvend, en met ruimte om uit te zoeken of het past.',
    ])

    {{-- §3 Hoe het werkt (3 named steps) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-8">Hoe het werkt</h2>

            <div class="space-y-8">
                <div>
                    <h3>Kennismaking</h3>
                    <p class="mt-3">
                        We zoeken eerst uit wie jullie zijn en wat jullie willen. Een
                        telefoon, een mail of een koffie — wat voor jullie past. Geen
                        vragenlijst, geen aanvraagformulier.
                    </p>
                </div>

                <div>
                    <h3>Vrijblijvend gesprek</h3>
                    <p class="mt-3">
                        Daarna spreken we langer af. Geen offerte, geen voorstel: een
                        open verkenning van wat een dansproject met Leon in jullie context
                        zou kunnen worden. Soms zit Sam zelf aan tafel, soms een van de
                        begeleiders die er al ervaring mee hebben.
                    </p>
                </div>

                <div>
                    <h3>Traject</h3>
                    <p class="mt-3">
                        Als het klikt, bouwen we samen iets op maat. Cadens, partners,
                        financiering, de vorm van een eventuele voorstelling: alles wordt
                        samen vastgelegd. Typisch zes maanden met wekelijkse sessies —
                        maar de echte vorm volgt uit het gesprek, niet uit een template.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- §4 Wat we al maakten (SP-05 × 2) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Wat we al maakten</h2>

            <ul class="grid md:grid-cols-2 gap-6">
                @foreach ([
                    [
                        'href'  => route('dansateliers.mariage'),
                        'title' => 'Mariage',
                        'desc'  => 'Een participatieve voorstelling in zes edities — telkens met een lokale groep.',
                    ],
                    [
                        'href'  => route('dansateliers.leon-op-school'),
                        'title' => 'Leon op school',
                        'desc'  => 'Een begeleid danstraject van zes maanden, in scholen, welzijnsorganisaties en zorgcentra.',
                    ],
                ] as $card)
                    <li>@include('partials.project-card', $card)</li>
                @endforeach
            </ul>

            <p class="meta mt-6">
                Kosmos 2027 (KANAL — Centre Pompidou / KVS) is in voorbereiding.
            </p>
        </div>
    </section>

    {{-- §5 Voor wie (organisation-type list) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-6">Voor wie</h2>
            <p>We werken graag samen met:</p>
            <ul class="mt-4 list-disc pl-5 space-y-2">
                <li>Cultuurhuizen, kunstencentra en festivals</li>
                <li>Scholen (basis · secundair · BuSO · DKO)</li>
                <li>Welzijns- en zorgorganisaties</li>
                <li>Buurthuizen en gemeenschapscentra</li>
                <li>Gemeentes en stadsdiensten</li>
            </ul>
        </div>
    </section>

    {{-- §6 Een partner aan het woord (SP-12 quote) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-8">Een partner aan het woord</h2>
        </div>
        @include('partials.quote', [
            'quote'       => 'Het atelier is een plek waar je anders kan communiceren: met je handen, voeten en hoofd.',
            'attribution' => 'Els Schoemaker',
            'context'     => 'BUSO Cardijnschool',
        ])
    </section>

    {{-- §7 Wat we van jullie verwachten (wederzijds) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-6">Wat we van jullie verwachten</h2>
            <p>Een traject werkt als jullie tijd en vertrouwen kunnen vrijmaken:</p>
            <ul class="mt-4 list-disc pl-5 space-y-2">
                <li>één vast contactpersoon vanuit jullie kant</li>
                <li>een groep die wekelijks samen kan zijn (cadens in overleg)</li>
                <li>openheid om samen na te denken over financiering — meestal mengen
                    we projectsubsidies, een schoolbudget of een GC-toelage</li>
            </ul>
            <p class="mt-6">
                Leon brengt de artistieke leiding, de begeleiders, de logistiek en de
                ervaring van zes jaar samen-bouwen.
            </p>
        </div>
    </section>

    {{-- §8 Plan een gesprek (SP-11 first use — contact pattern) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-4">Plan een gesprek</h2>
            <p>
                Stuur een mail naar Sam Schoetters, of vraag een algemene contactopname
                aan.
            </p>
            <div class="mt-6 flex flex-wrap gap-3">
                <a href="mailto:hello@leon.dance?subject=Participatief%20dansproject%20opzetten" class="btn-primary">
                    Mail Sam
                </a>
                <a href="{{ route('over.contact') }}" class="btn-ghost">
                    Algemeen contact
                </a>
            </div>
        </div>
    </section>

@endsection
