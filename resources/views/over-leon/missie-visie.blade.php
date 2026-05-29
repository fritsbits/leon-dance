@extends('layouts.app', [
    'title' => 'Missie & visie · Leon',
    'description' => 'Wat Leon wil zijn, en waarom. Een participatieve dansorganisatie in Brussel die evenwaardig werkt, en sinds 2024 een Apartheid Free Zone is.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant A) --}}
    @include('partials.page-header', [
        'eyebrow' => 'Over Leon',
        'title'   => 'Missie & visie',
        'lede'    => 'Wat Leon wil zijn, en waarom, in het kort.',
    ])

    {{-- §2 Missie + Visie --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Missie &amp; visie</h2>

            <h3 class="mt-8">Missie</h3>
            <p class="mt-3">
                Via dans en muziek nodigt Leon mensen van alle leeftijden, genders,
                lichamen en achtergronden uit om elkaar te ontmoeten in een open,
                speelse en respectvolle gemeenschap.
            </p>

            <h3 class="mt-8">Visie</h3>
            <p class="mt-3">
                Een mix van mensen is voor Leon geen doel op zich, maar de voorwaarde
                voor het werk. We werken graag in de publieke ruimte, daar waar mensen
                al zijn, en we draaien rollen om: wie meestal kijkt, danst; wie meestal
                leidt, volgt. Zo ontstaat ruimte voor iets nieuws.
            </p>
            <p class="mt-4">
                Het resultaat is geen voorstelling met diverse cast, maar een groep die
                zichzelf herkent in het werk. Verrassing, vertrouwen, en vrijheid om
                zelf in te brengen.
            </p>
        </div>
    </section>

    {{-- §3 Hoe we werken --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Hoe we werken</h2>
            <p class="mt-4">
                Leon werkt evenwaardig. Een deelnemer van 67 staat op gelijke hoogte
                met een professionele danser; een leerling geeft instructies aan zijn
                leerkracht. Geen niveaus, geen audities. Een wekelijks atelier is
                gratis en zonder inschrijving. Kom langs. Een grotere voorstelling
                bouw je samen op in zo'n tien weken repetitie.
            </p>
            <p class="mt-6">
                <a href="{{ route('over.impact') }}" class="btn-text">→ Wat dat oplevert, in praktijk en cijfers: Impact</a>
            </p>
        </div>
    </section>

    {{-- §4 Apartheid Free Zone --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2>Apartheid Free Zone</h2>
            <p class="mt-4">
                Leon is sinds 2024 een Apartheid Free Zone. We werken bewust niet samen
                met staten, partners of residenties die medeplichtig zijn aan
                apartheidsregimes of betrokken zijn bij mensenrechten-schendingen. We
                herevalueren onze bestaande samenwerkingen volgens diezelfde criteria.
                Het is een blijvende keuze, geen verklaring.
            </p>
            <p class="mt-4">
                Apartheid Free Zone is een wereldwijd initiatief, begonnen tijdens het
                apartheidsregime in Zuid-Afrika en sindsdien geëvolueerd naar een
                beweging tegen apartheid in al haar vormen. Meer op
                <a href="https://bdsmovement.net" rel="noopener" target="_blank">bdsmovement.net</a>.
            </p>
        </div>
    </section>

    {{-- §5 Quote (SP-12 variant A · inline frame · no partial yet — first use, promote on 2nd caller) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <figure class="bg-[var(--color-surface-muted)] p-8 md:p-12">
                <blockquote>
                    <p class="text-lg">
                        &ldquo;Ik kan er mezelf zijn en ik ontmoet mensen die ik anders nooit zou tegenkomen.&rdquo;
                    </p>
                </blockquote>
                <figcaption class="meta mt-4">— Hadja, 67 · deelnemer</figcaption>
            </figure>
        </div>
    </section>

@endsection
