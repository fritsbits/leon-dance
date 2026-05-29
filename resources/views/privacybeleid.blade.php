@extends('layouts.app', [
    'title' => 'Privacybeleid',
    'description' => 'Hoe Leon vzw omgaat met je gegevens bij een contactaanvraag.',
])

@section('content')

    @include('partials.page-header', [
        'eyebrow' => 'Leon vzw',
        'title'   => 'Privacybeleid',
        'lede'    => 'Wat we met je gegevens doen wanneer je ons contacteert, kort en concreet.',
    ])

    <section class="section border-t border-[var(--color-border)]">
        <div class="container-prose space-y-8">
            <div>
                <h2>Wie we zijn</h2>
                <p>Leon vzw verwerkt je gegevens als verantwoordelijke. Je bereikt ons op
                    <a href="mailto:hello@leon.dance">hello@leon.dance</a> of per post: Leon vzw,
                    Weilandstraat 46, 1080 Sint-Jans-Molenbeek. Ondernemingsnummer 0769.579.192.</p>
            </div>
            <div>
                <h2>Wat we verzamelen</h2>
                <p>Wanneer je het contactformulier invult, geef je ons je naam, je e-mailadres,
                    eventueel je organisatie en je bericht. Die gegevens komen als e-mail bij het
                    team toe. We bewaren ze niet apart in een database.</p>
            </div>
            <div>
                <h2>Waarom we ze gebruiken</h2>
                <p>We gebruiken je gegevens alleen om je vraag te beantwoorden en, als daar een
                    samenwerking uit groeit, om de eerste afspraken te maken. De grondslag is ons
                    gerechtvaardigd belang om op berichten te antwoorden (art. 6.1.f AVG); gaat het
                    om een concrete aanvraag of boeking, dan is het de stap vóór een overeenkomst
                    (art. 6.1.b AVG). Je gegevens invullen is vrijwillig. Zonder kunnen we je vraag
                    niet beantwoorden. Via dit formulier schrijf je je niet in op een nieuwsbrief.</p>
            </div>
            <div>
                <h2>Hoe lang we ze bewaren</h2>
                <p>We houden je bericht bij zolang we ermee bezig zijn, plus een redelijke periode
                    om de conversatie te kunnen opvolgen. Daarna verwijderen we het.</p>
            </div>
            <div>
                <h2>Met wie we ze delen</h2>
                <p>Alleen het team van Leon leest je bericht. Voor het bezorgen van e-mail werken we
                    met Resend, een e-mailprovider in de Verenigde Staten; die doorgifte gebeurt
                    onder het EU-VS-Data Privacy Framework en de standaardcontractbepalingen van de
                    Europese Commissie. We verkopen je gegevens niet en delen ze niet met anderen
                    voor reclame.</p>
            </div>
            <div>
                <h2>Cookies</h2>
                <p>Deze site gebruikt één technische cookie die nodig is om het formulier veilig te
                    laten werken. Daar is geen toestemming voor nodig, en we gebruiken geen cookies
                    om je te volgen of voor statistieken.</p>
            </div>
            <div>
                <h2>Je rechten</h2>
                <p>Je kan je gegevens altijd opvragen, laten verbeteren of laten verwijderen. Je kan
                    ook vragen om het gebruik te beperken, bezwaar maken, of je gegevens laten
                    overdragen. Stuur een mailtje naar <a href="mailto:hello@leon.dance">hello@leon.dance</a>
                    en we regelen het.</p>
            </div>
            <div>
                <h2>Vragen of een klacht</h2>
                <p>Heb je een vraag over je privacy? Mail
                    <a href="mailto:hello@leon.dance">hello@leon.dance</a>. Ben je niet tevreden met
                    hoe we met je gegevens omgaan, dan kan je terecht bij de
                    Gegevensbeschermingsautoriteit, Drukpersstraat 35, 1000 Brussel:
                    <a href="https://www.gegevensbeschermingsautoriteit.be">gegevensbeschermingsautoriteit.be</a>.</p>
            </div>
            <p class="meta">Laatst bijgewerkt: 28 mei 2026</p>
        </div>
    </section>

@endsection
