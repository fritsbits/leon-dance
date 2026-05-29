<?php

namespace App\Support;

/**
 * Single source for the navigable children of each top-level section.
 * Home teasers and the section hubs render from here so the copy is
 * maintained once. Stub-stage data layer; a CMS replaces it post-NL-validation.
 */
class SiteSections
{
    /** Dansateliers & performances — the four work items. */
    public static function work(): array
    {
        return [
            [
                'href'  => route('dansateliers.atelier-leon'),
                'title' => 'Atelier Leon',
                'desc'  => 'Open dansatelier op woensdagavond in de Pianofabriek en zaterdagmiddag in de Maison des Cultures. Gratis, geen inschrijving.',
                'image' => asset('img/atelier-leon-pink-trousers-joy-dkeyzer1.webp'),
                'imageAlt' => 'Man in roze broek danst tussen een groep buiten in het atelier.',
            ],
            [
                'href'  => route('dansateliers.leon-op-school'),
                'title' => 'Leon op school',
                'desc'  => 'Een begeleid danstraject van zes maanden, samen met scholen, welzijnsorganisaties en zorgcentra.',
                'image' => asset('img/leon-in-de-klas-hakimi-shirt-2023.webp'),
                'imageAlt' => 'Kinderen en volwassenen dansen samen in een studio tijdens een schooltraject.',
            ],
            [
                'key'   => 'mariage',
                'href'  => route('dansateliers.mariage'),
                'title' => 'Mariage',
                'desc'  => 'Een participatieve voorstelling in zes edities, telkens met een vaste kerngroep en een lokale groep uit de stad.',
                'image' => asset('img/mariage-procession-white-dancer-mvg3.webp'),
                'imageAlt' => 'Stoet van Mariage op een plein, met een danser in het wit en vrouwen arm in arm.',
            ],
            [
                'href'  => route('dansateliers.mobiele-dansstudio'),
                'title' => 'Mobiele dansstudio',
                'desc'  => 'Een verplaatsbare dansruimte die je kan uitnodigen op je eigen plek: een school, een plein, een buurtfeest.',
            ],
        ];
    }

    /** Samenwerken — three peer doors. Home shows the label; the hub adds sub + tag. */
    public static function samenwerken(): array
    {
        return [
            [
                'href'  => route('samenwerken.opzetten'),
                'label' => 'Een participatief dansproject opzetten',
                'sub'   => 'Kennismaking, een vrijblijvend gesprek, en daarna een danstraject op maat met je groep, school, organisatie of stad.',
                'tag'   => null,
            ],
            [
                'href'  => route('samenwerken.uitnodigen'),
                'label' => 'De mobiele dansstudio uitnodigen',
                'sub'   => 'Een verplaatsbare dansruimte boeken voor een week, een festival, of een zomerformule op locatie.',
                'tag'   => null,
            ],
            [
                'href'  => route('samenwerken.doen'),
                'label' => 'Vrijwilligerswerk of stage doen',
                'sub'   => 'Meewerken aan repetities, voorstellingen of het dagelijkse werk bij Leon.',
                'tag'   => 'in voorbereiding',
            ],
        ];
    }

    /** Over Leon — five sub-pages, in locked order (30-structure §Over Leon). */
    public static function overLeon(): array
    {
        return [
            [
                'href'  => route('over.missie-visie'),
                'title' => 'Missie & visie',
                'desc'  => 'Waar Leon voor staat, in het kort.',
            ],
            [
                'href'  => route('over.impact'),
                'title' => 'Impact',
                'desc'  => 'Hoe we werken, met wie en wat eruit komt.',
            ],
            [
                'href'  => route('over.team'),
                'title' => 'Team',
                'desc'  => 'Wie er bij Leon werkt.',
            ],
            [
                'href'  => route('over.historiek'),
                'title' => 'Historiek',
                'desc'  => 'Van Ultima Vez naar Leon, zestien jaar in jaartallen.',
            ],
            [
                'href'  => route('over.contact'),
                'title' => 'Contact',
                'desc'  => 'Hoe je ons bereikt.',
            ],
        ];
    }
}
