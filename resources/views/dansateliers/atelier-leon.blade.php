@php
    use App\Enums\AtelierType;

    $ateliers = \App\Models\Atelier::query()
        ->open()->active()->with('venue')->ordered()->get();

    $upcomingAteliers = \App\Models\Event::query()
        ->where('is_public', true)
        ->forAtelierType(AtelierType::Open)
        ->with('atelier')
        ->upcoming()
        ->limit(8)
        ->get();

    // Each row links to the specific atelier-instance page (falls back to the agenda
    // if a slot has no slug yet).
    $atelierHref = fn ($e) => $e->atelier?->slug
        ? route('dansateliers.atelier-leon.detail', $e->atelier)
        : route('agenda', ['practice' => 'atelier-leon']);

    \Carbon\Carbon::setLocale('nl');
@endphp

@extends('layouts.app', [
    'title' => 'Atelier Leon: wekelijks open dansatelier in Brussel',
    'description' => 'Een wekelijks open dansatelier in Brussel: woensdag in de Pianofabriek (Sint-Gillis), zaterdag in de Maison des Cultures (Molenbeek). Gratis, zonder inschrijving, geen ervaring nodig.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant A) --}}
    @include('partials.page-header', [
        'eyebrow' => 'Dansateliers & performances · Open dansateliers',
        'title'   => 'Atelier Leon',
        'lede'    => 'Wekelijks samen dansen in Brussel. Gratis, zonder inschrijving. Geen ervaring nodig. Kom gewoon langs.',
    ])

    {{-- §2 Photo (SP-13) · Atelier Leon open atelier, studio. --}}
    @include('partials.photo-block', [
        'src'    => asset('img/leon-studio-intergen-walk-cruzz9220.webp'),
        'alt'    => 'Deelnemers van verschillende leeftijden lopen samen door de studio tijdens een open atelier, een oudere man en kinderen bewegen mee.',
        'credit' => '© Cruzz Taylor',
    ])

    {{-- §3 Wat is een open atelier? (format-doc) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Wat is een open atelier?</h2>
            <p class="mt-6">
                Een open atelier is een dansles waar iedereen welkom is. Er is een vaste
                begeleider, een opwarming, en daarna werken we samen aan beweging: op
                muziek, in een groep, op je eigen ritme.
            </p>
            <p class="mt-4">
                We leren geen choreografie uit het hoofd. We bouwen geen voorstelling op.
                Wat we wel doen: twee uur samen bewegen, kijken naar elkaar, dingen
                proberen. Soms volg je, soms leid je, soms sta je een minuut stil. Dat
                mag allemaal.
            </p>
        </div>
    </section>

    {{-- §4 Waar en wanneer (locaties + eerstvolgende SP-07 × N) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Waar en wanneer</h2>

            @if ($ateliers->isNotEmpty())
                <div class="grid md:grid-cols-2 gap-8">
                    @foreach ($ateliers as $atelier)
                        @php($detailHref = $atelier->slug ? route('dansateliers.atelier-leon.detail', $atelier) : null)
                        <a @if ($detailHref) href="{{ $detailHref }}" @endif
                           class="block no-underline group rounded-[var(--radius)] -mx-3 px-3 py-2 @if ($detailHref) hover:bg-[var(--color-hover)] @endif">
                            <p class="font-medium @if ($detailHref) group-hover:underline @endif">{{ $atelier->dayLabel() }} · {{ $atelier->timeRange() }}</p>
                            <p class="font-medium mt-1">{{ $atelier->venue?->name }} <span class="meta">({{ $atelier->venue?->area }})</span></p>
                            <p class="meta mt-1">{{ $atelier->venue?->address }}</p>
                            @if ($detailHref)
                                <p class="meta mt-2 text-[var(--color-text)]">Bekijk deze plek →</p>
                            @endif
                        </a>
                    @endforeach
                </div>
            @else
                <p class="meta">Bekijk de <a href="{{ route('agenda', ['practice' => 'atelier-leon']) }}">agenda</a> voor de eerstvolgende open ateliers.</p>
            @endif

            <p class="mt-8 max-w-[var(--max-content)]">
                <span class="font-medium">Wat breng je mee?</span>
                Kledij waarin je makkelijk beweegt en een fles water.
            </p>

            <h3 class="mt-12 mb-4">Eerstvolgende</h3>
            @include('partials.agenda-list', [
                'events'    => $upcomingAteliers,
                'href'      => $atelierHref,
                'emptyText' => 'Geen aankomende open ateliers in de agenda.',
                'linkLabel' => '→ Volledige agenda',
                'linkHref'  => route('agenda', ['practice' => 'atelier-leon']),
            ])
        </div>
    </section>

    {{-- §5 Voor wie? (reassurance — Q-shaped beats) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Voor wie?</h2>

            <h3 class="mt-8">Heb ik ervaring nodig?</h3>
            <p class="mt-2">Nee. Wie nog nooit gedanst heeft is even welkom als wie het al jaren doet.</p>

            <h3 class="mt-8">Hoe oud moet ik zijn?</h3>
            <p class="mt-2">Vanaf 16. Geen bovengrens: onze oudste vaste danser is in de zeventig.</p>

            <h3 class="mt-8">Kost het iets?</h3>
            <p class="mt-2">Nee. Gratis, elke week.</p>

            <h3 class="mt-8">Moet ik me inschrijven?</h3>
            <p class="mt-2">Nee. Kom op het uur, dans mee, ga weer.</p>
        </div>
    </section>

@endsection
