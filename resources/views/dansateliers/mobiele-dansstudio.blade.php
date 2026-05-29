@extends('layouts.app', [
    'title' => 'Mobiele dansstudio · Leon',
    'description' => 'Een verplaatsbare dansruimte die we naar je plek brengen: een plein, een school, een festival, een binnenkoer. Te boeken voor een dag, een week of een hele zomer.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant B — text header + SP-13 sibling) --}}
    @include('partials.page-header', [
        'eyebrow' => 'Dansateliers & performances',
        'title'   => 'Mobiele dansstudio',
        'lede'    => 'Een verplaatsbare dansruimte die we naar je plek brengen: een plein, een school, een festival, een binnenkoer. Te boeken voor een dag, een week of een hele zomer.',
    ])

    {{-- §2 Photo (SP-13) · No studio-on-location photo selected yet (brief gap #3);
         section collapses per spec. When asset arrives:
         @include('partials.photo-block', [
             'src' => asset('img/mobiele-dansstudio-op-locatie.jpg'),
             'alt' => 'De mobiele dansstudio op een plein, met mensen die dansen.',
             'credit' => '© [Fotograaf] · de studio op locatie, [plaats], [jaar]',
         ])
    --}}

    {{-- §3 Wat het is (format-doc · prose, no SP) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-6">Wat het is</h2>
            <p>
                De mobiele dansstudio is een dansvloer die op een fiets-aanhangwagen
                past. We rijden ze naar de plek waar je ze nodig hebt, bouwen ze op,
                en blijven om mee te dansen, of laten ze staan voor wie zelf wil
                bewegen.
            </p>
            <p class="mt-4">
                De studio werkt voor een schoolspeelplaats tijdens de pauze, voor een
                plein in de zomer, voor een festival, voor een open repetitie in de
                straat. Wat er gebeurt rond de studio, een open atelier, een korte
                voorstelling, gewoon dansen, kiezen we samen vooraf.
            </p>
        </div>
    </section>

    {{-- §4 Technische fiche (HTML <dl> · 6 term/desc rows · all strawman, gap #2) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-6">Technische fiche</h2>
            <dl class="divide-y divide-[var(--color-border-subtle)]">
                @foreach ([
                    ['Afmetingen',                    '~6 × 6 m vloeroppervlak, 3 m hoog. Op een vlakke ondergrond.'],
                    ['Op- en afbouw',                 '±2 uur opzetten, ±1 uur afbouwen. Door 2 mensen van Leon.'],
                    ['Stroom',                        '1 × 230 V stopcontact volstaat.'],
                    ['Vloer & ondergrond',            'Vlakke, droge ondergrond: beton, asfalt, hout of vaste grond.'],
                    ['Wat we meebrengen',             'Dansvloer, geluidsinstallatie, 2 begeleiders.'],
                    ['Wat we vragen van de locatie',  'Water, schaduw of overkapping bij hitte, een kleedruimte in de buurt.'],
                ] as [$term, $desc])
                    <div class="py-4 md:grid md:grid-cols-[12rem_1fr] md:gap-8">
                        <dt class="font-medium">{{ $term }}</dt>
                        <dd class="mt-1 md:mt-0 text-[color:var(--color-text-muted)]">{{ $desc }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </section>

    {{-- §5 Zomerformule --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-6">Zomerformule</h2>
            <p>
                In de zomer trekt Leon met de studio naar pleinen en parken. We bakken
                pannenkoeken op twee gasbranders, zetten muziek aan en nodigen iedereen
                die langskomt uit om mee te dansen. Gratis voor het publiek. Aan te
                vragen door buurthuizen, stadsdiensten en festivals.
            </p>
        </div>
    </section>

    {{-- §6 Waar de studio al stond (track record · plain ul · all strawman, gap #4) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-6">Waar de studio al stond</h2>
            <ul class="divide-y divide-[var(--color-border-subtle)]">
                @foreach ([
                    ['plaats' => 'Pianofabriek',                                       'context' => 'binnenkoer',                            'jaar' => '2024'],
                    ['plaats' => 'MolenFest',                                          'context' => 'plein voor de Maison des Cultures',     'jaar' => '2024'],
                    ['plaats' => 'Park Rouge',                                         'context' => 'zomeractivatie',                        'jaar' => '2025'],
                    ['plaats' => 'Cardijnschool',                                      'context' => 'speelplaats',                           'jaar' => '2025'],
                    ['plaats' => 'Anderlecht zomerfestival',                           'context' => 'publieke ruimte',                       'jaar' => '2025'],
                ] as $stop)
                    <li class="py-3 flex flex-col md:flex-row md:items-baseline md:gap-3">
                        <span class="font-medium">{{ $stop['plaats'] }}</span>
                        <span class="meta md:flex-1">{{ $stop['context'] }}</span>
                        <span class="meta">{{ $stop['jaar'] }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- §7 Mobiele dansstudio uitnodigen? (Samenwerken hook) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-3">Mobiele dansstudio uitnodigen?</h2>
            <p>
                Programmer je een plein, een festival of een buurtmoment? Plan een
                gesprek. Dan kijken we samen wat past.
            </p>
            <div class="mt-8">
                <a href="{{ route('samenwerken.uitnodigen') }}" class="btn-primary">Plan een uitnodiging</a>
            </div>
        </div>
    </section>

@endsection
