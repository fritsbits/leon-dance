@php
    use App\Enums\EventType;

    \Carbon\Carbon::setLocale('nl');

    $edities = \App\Models\Edition::query()
        ->where('project_slug', 'mariage')
        ->orderByDesc('starts_at')
        ->get();

    $openCall = $edities->first(fn (\App\Models\Edition $e) => $e->isInschrijvingOpen());

    // The next public voorstelling, surfaced only when it is near (≤ 8 weeks out): an
    // editie leads up to its closing show, so we promote watching it as the date approaches.
    $nearPerformance = \App\Models\Event::query()
        ->forProject('mariage')
        ->ofType(EventType::Voorstelling)
        ->where('is_public', true)
        ->upcoming()
        ->where('starts_at', '<=', now()->addWeeks(8))
        ->first();
@endphp

@extends('layouts.app', ['title' => 'Mariage'])

@section('content')
    @include('partials.page-header', [
        'eyebrow'     => 'Participatieve performances · Project',
        'eyebrowHref' => route('dansateliers.index'),
        'title'       => 'Mariage',
        'lede'        => 'Een participatieve voorstelling rond een symbolisch trouwfeest. Deelnemers, passanten en publiek dansen samen, op festivals en buurtfeesten in Molenbeek, Gaasbeek, Koekelberg, Anderlecht en het centrum van Brussel.',
    ])

    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Wat is Mariage?</h2>
            <p>Mariage brengt een vaste kern van Leon-dansers samen met deelnemers, vrijwilligers en passanten. Via open ateliers in de publieke ruimte en repetities groeit een symbolisch trouwfeest: een stoet door de straten, een verkleedpartij, een gedeelde maaltijd. Tijdens de voorstelling vervaagt de grens tussen performers en publiek.</p>
            <p>[Vervolgalinea: hoe een editie groeit van open atelier tot stoet. Sam/Kristin schrijven of bevestigen.]</p>
        </div>

        <figure class="container-wide mt-8">
            <div class="w-full overflow-hidden rounded-[var(--radius)] border border-[var(--color-border)]"
                 style="position: relative; padding-top: 56.25%;">
                <iframe
                    src="https://player.vimeo.com/video/1074336504?dnt=1&title=0&byline=0&portrait=0"
                    title="Trailer van Mariage"
                    style="position: absolute; inset: 0; width: 100%; height: 100%; border: 0;"
                    loading="lazy"
                    allow="fullscreen; picture-in-picture"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
            </div>
            <figcaption class="meta mt-2">Trailer · Mariage (Vimeo)</figcaption>
        </figure>
    </section>

    {{-- Timely band 1 · recruitment (SP-16) · renders only while a call is open --}}
    @include('partials.open-call-band', ['editie' => $openCall, 'variant' => 'project'])

    {{-- Timely band 2 · the closing voorstelling, only when it is near --}}
    @include('partials.upcoming-performance-band', ['performance' => $nearPerformance])

    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Edities</h2>
            <ul class="grid md:grid-cols-2 gap-4">
                @foreach ($edities as $editie)
                    <li>
                        <a href="{{ route('dansateliers.mariage.editie', $editie) }}"
                           class="block p-4 border border-[var(--color-border)] rounded-[var(--radius)] no-underline hover:bg-[var(--color-hover)]">
                            <span class="font-medium">
                                {{ trim($editie->stad . ' ' . $editie->jaar) }}
                                <span class="meta inline-block ml-2 align-middle border border-[var(--color-border)] rounded-[var(--radius)] px-2 py-0.5">{{ $editie->status() }}</span>
                            </span>
                            <span class="meta block mt-1">{{ $editie->periode ?? '[periode — te bevestigen]' }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    {{-- §5 Hoe een editie groeit · proces · nazorg · continuïteit · evolutie + embedded quote.
         Copy = strawman pending Sam/Kristin (Conf 3/5 · gap). --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-8">Hoe een editie groeit</h2>

            <h3>Proces</h3>
            <p class="mt-2">Een editie groeit over ongeveer tien weken. Een vaste kern van Leon-dansers repeteert elke week samen met deelnemers uit de buurt. Open ateliers in de publieke ruimte trekken passanten mee. Zo ontstaat stap voor stap een stoet, een verkleedpartij en een gedeelde maaltijd.</p>

            <h3 class="mt-8">Nazorg</h3>
            <p class="mt-2">Na de slotvoorstelling houdt de groep contact. Er zijn momenten om elkaar terug te zien, en wie wil danst mee in een volgende editie.</p>
        </div>

        <div class="my-10">
            @include('partials.quote', [
                'quote'       => 'Ik kan er mezelf zijn en ik ontmoet mensen die ik anders nooit zou tegenkomen.',
                'attribution' => 'Hadja, 67',
                'context'     => 'deelnemer Mariage',
                'variant'     => 'inline',
            ])
        </div>

        <div class="container-text">
            <h3>Continuïteit</h3>
            <p class="mt-2">Deelnemers keren terug, soms in een andere stad. Wat in de ene buurt begint, reist mee naar de volgende editie en groeit met elke groep die zich aansluit.</p>

            <h3 class="mt-8">Evolutie</h3>
            <p class="mt-2">Geen twee edities zijn gelijk. Elke buurt, elke partner en elke groep geeft Mariage een eigen vorm, van de eerste editie tot vandaag.</p>
        </div>
    </section>

    {{-- §6 Mariage in jouw stad? · durable commission CTA (P3/P4) + inline partners (SP-09 C) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-4">Mariage in jouw stad?</h2>
            <p>Mariage zetten we samen met een lokale partner op. Wil je het naar jouw stad of buurt brengen? We denken graag met je mee.</p>
            <p class="mt-6">
                <a href="{{ route('samenwerken.opzetten') }}" class="btn-primary">Plan een gesprek</a>
            </p>
            {{-- SP-09 variant C · inline partner line · strawman partners (BG-6) --}}
            <p class="meta mt-8">Mariage komt tot stand met KANAL — Centre Pompidou, KVS, CAMPO, BRONKS en MUS-E, met steun van de Vlaamse overheid, de VGC en de Stad Brussel.</p>
        </div>
    </section>
@endsection
