@extends('layouts.app', [
    'title' => 'Privacybeleid',
    'description' => 'Hoe Leon vzw omgaat met je gegevens bij een contactaanvraag.',
])

@section('content')

    @include('partials.page-header', [
        'eyebrow' => 'Leon vzw',
        'title'   => 'Privacybeleid',
        'lede'    => 'Wat we met je gegevens doen wanneer je ons contacteert — kort en concreet.',
    ])

    <section class="section border-t border-[var(--color-border)]">
        <div class="container-prose space-y-8">
            <div>
                <h2>Wat we bewaren</h2>
                <p>[Annotatie — bevestig met Leon: een contactaanvraag komt als e-mail bij het team
                    toe en wordt niet apart in een database bewaard. Je naam, e-mail, organisatie en
                    bericht reizen mee in die mail.]</p>
            </div>
            <div>
                <h2>Waarom we ze gebruiken</h2>
                <p>[Annotatie — grondslag: gerechtvaardigd belang en stappen vóór een eventuele
                    samenwerking (AVG art. 6(1)(f)/(b)). Via dit formulier schrijf je je niet in op
                    een nieuwsbrief.]</p>
            </div>
            <div>
                <h2>Hoe lang</h2>
                <p>[Annotatie — zolang de e-mailconversatie loopt, plus een redelijke opvolgtermijn.
                    Bevestig de exacte termijn met Leon.]</p>
            </div>
            <div>
                <h2>Je rechten en contact</h2>
                <p>[Annotatie — recht op inzage, verbetering en verwijdering; één contactadres voor
                    privacyvragen + verwijzing naar de Gegevensbeschermingsautoriteit. Bevestig het
                    juiste adres met Leon.]</p>
            </div>
        </div>
    </section>

@endsection
