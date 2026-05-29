@php
    use App\Enums\AtelierType;
    use App\Enums\EventType;

    $upcomingEvents = \App\Models\Event::query()
        ->where('is_public', true)
        ->whereNotIn('type', [EventType::LeonsWhitePage->value, EventType::LeonRondDeTafel->value])
        ->with(['atelier', 'edition.project'])
        ->upcoming()
        ->limit(3)
        ->get();

    $hrefFor = function (\App\Models\Event $event) {
        if ($event->edition?->project?->slug === 'mariage') {
            return route('dansateliers.mariage');
        }
        if ($event->atelier?->type === AtelierType::Open) {
            return route('dansateliers.atelier-leon');
        }
        if ($event->atelier?->type === AtelierType::School) {
            return route('dansateliers.leon-op-school');
        }
        return route('agenda');
    };

    $openCallEditie = \App\Models\Edition::openInschrijving()
        ->orderBy('starts_at')
        ->first();

    \Carbon\Carbon::setLocale('nl');
@endphp

@extends('layouts.app', [
    'title' => 'Leon: participatieve dans in Brussel',
    'description' => 'Dans mee in Brussel, in een wekelijks open atelier of in grotere participatieve voorstellingen. Geen ervaring nodig. In Brussel sinds 2010.',
])

@section('content')

    {{-- §1 Hero (SP-03 — spec lives in 42-briefs/01-home §1) --}}
    <section class="section">
        <div class="container-wide">
            <p class="meta uppercase tracking-wide mb-3">Leon · Brussel</p>
            <h1>Dans een keer mee.</h1>
            <p class="mt-6 text-lg max-w-[var(--max-content)]">
                Bij Leon dans je wekelijks samen met andere Brusselaars: in een open
                atelier of op de scène van een grote voorstelling. Geen ervaring nodig.
                Je hoort er meteen bij.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row sm:flex-wrap gap-3">
                <a href="{{ route('dansateliers.atelier-leon') }}" class="btn-primary w-full sm:w-auto">Kom langs in Atelier Leon</a>
                <a href="{{ route('agenda') }}" class="btn-ghost w-full sm:w-auto">Bekijk de agenda</a>
            </div>
            <p class="meta mt-8">In Brussel sinds 2010. Gratis, zonder inschrijving.</p>
        </div>
    </section>

    {{-- Open-call band (SP-16) · conditional — renders only when a call is open --}}
    @include('partials.open-call-band', ['editie' => $openCallEditie, 'variant' => 'home'])

    {{-- §2 Photo (SP-13) · full-width hero frame --}}
    @include('partials.photo-block', [
        'src' => asset('img/car-free-street-intergen-play-ivanput.webp'),
        'alt' => 'Brusselaars dansen samen in een autovrije straat, een man in een grijze hoodie gaat voorop, een kind in het rood danst mee.',
        'credit' => '© Ivan Put',
    ])

    {{-- §3 Het werk van Leon (SP-05 × 4 · shared with dansateliers/index via work-grid) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Het werk van Leon</h2>
            @include('partials.work-grid')
        </div>
    </section>

    {{-- §4 Eerstvolgende (SP-08 agenda-list) · top-3 upcoming public events --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Eerstvolgende</h2>
            @include('partials.agenda-list', [
                'events'    => $upcomingEvents,
                'href'      => $hrefFor,
                'emptyText' => 'Geen eerstvolgende activiteiten in de agenda.',
                'linkLabel' => '→ Volledige agenda',
                'linkHref'  => route('agenda'),
            ])
        </div>
    </section>

    {{-- §5 Werk je samen met Leon? (text-link list) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-3">Werk je samen met Leon?</h2>
            <p>Drie manieren om met Leon in zee te gaan:</p>
            <ul class="mt-6 space-y-3">
                @foreach (\App\Support\SiteSections::samenwerken() as $row)
                    <li><a href="{{ $row['href'] }}" class="no-underline">→ {{ $row['label'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- §6 Onze partners (SP-09 Featured variant) --}}
    <div class="border-t border-[var(--color-border)]">
        @include('partials.funder-wall', ['variant' => 'featured'])
    </div>

@endsection
