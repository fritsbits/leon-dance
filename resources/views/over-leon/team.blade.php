@extends('layouts.app', [
    'title' => 'Team',
    'description' => 'Wie maakt en draagt Leon: kerngroep, geassocieerde artiesten en bestuur van Leon vzw.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant A) --}}
    @include('partials.page-header', [
        'eyebrow' => 'Over Leon',
        'title'   => 'Team',
        'lede'    => 'Een kleine kerngroep, een ruimere pool van geassocieerde artiesten en een statutair bestuur. Wie doet wat, en sinds wanneer.',
    ])

    {{-- §2 Kerngroep (SP-NEW-1 person card × 4) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2 class="mb-8">Kerngroep</h2>
            <ul class="grid md:grid-cols-2 gap-6">
                @foreach ([
                    [
                        'name'    => 'Seppe Baeyens',
                        'role'    => 'choreograaf · artistiek leider',
                        'context' => 'Maakt het werk en zet de toon op de vloer en in de zaal. Naar Leon sinds de oprichting; voorheen verbonden aan Ultima Vez.',
                    ],
                    [
                        'name'    => 'Sam De Wit',
                        'role'    => 'coördinator · bestuurder',
                        'context' => 'Dagelijkse leiding, productie en eerste contactpersoon. Bestuurder sinds 2025.',
                    ],
                    [
                        'name'    => 'Kristin Rogghe',
                        'role'    => 'communicatie · dramaturg',
                        'context' => 'Onderhoudt het verhaal en de site, en werkt mee als dramaturg in het artistieke kernteam. Ook stadsdramaturg bij KVS.',
                    ],
                    [
                        'name'    => 'Isabelle Azaïs',
                        'role'    => 'productie · scenografie',
                        'context' => 'Productieleiding (samen met Sam) en vormgeving, onder andere op Mariage.',
                    ],
                ] as $person)
                    <li class="border border-[var(--color-border)] rounded-[var(--radius)] p-6">
                        <p class="font-medium">{{ $person['name'] }}</p>
                        <p class="meta mt-2">{{ $person['role'] }}</p>
                        <p class="mt-3">{{ $person['context'] }}</p>
                    </li>
                @endforeach
            </ul>
            <p class="meta mt-6">Uitgebreide profielen volgen zodra het team ze schrijft.</p>
        </div>
    </section>

    {{-- §3 Geassocieerde artiesten --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-6">Geassocieerde artiesten</h2>
            <p>
                Leon werkt met een vaste pool van veertien artiesten: dansers,
                muzikanten en performers die op verschillende projecten meebouwen.
            </p>
            @php
                $associated = [
                    'Lena Michel van Drie',
                    'Hussein Rassim Al Baldawi',
                    'Fanny Vandesande',
                    'Karen Willems',
                    'Stef Heeren',
                    'Saif Al-Qaissy',
                    'Martha Balthazar',
                    'Adnane Lamarti',
                    'Aude Uytterhoeven',
                    'Brend Van Dijck',
                    'Evy Van Hoydonck',
                    'Emma Ducheyne',
                ];
            @endphp
            <ul class="mt-6 flex flex-wrap gap-x-3 gap-y-2 list-none">
                @foreach ($associated as $i => $name)
                    <li>
                        <span class="font-medium">{{ $name }}</span>
                        @unless ($loop->last)
                            <span class="meta" aria-hidden="true">·</span>
                        @endunless
                    </li>
                @endforeach
            </ul>
            <p class="meta mt-6">Seppe, Sam, Kristin en Isabelle hierboven werken hier ook binnen.</p>
        </div>
    </section>

    {{-- §4 Bestuur --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <h2 class="mb-6">Bestuur</h2>
            <p>
                Leon vzw is opgericht in 2021. Het statutaire bestuur (zes
                bestuurders) vergadert los van het artistieke team.
            </p>
            <ul class="mt-8 border-t border-[var(--color-border-subtle)]">
                @foreach ([
                    ['name' => 'Patricia Balletti', 'role' => 'bestuurder · sinds 2023'],
                    ['name' => 'Nadine De Brouwer', 'role' => 'bestuurder · sinds 2023'],
                    ['name' => 'Dries Merckx',      'role' => 'bestuurder · sinds 2023'],
                    ['name' => 'Heleen Schepens',   'role' => 'bestuurder · sinds 2023'],
                    ['name' => 'Nadia Verbeeck',    'role' => 'bestuurder · sinds 2023'],
                    ['name' => 'Sam De Wit',        'role' => 'bestuurder · sinds 2025'],
                ] as $director)
                    <li class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-1 py-4 border-b border-[var(--color-border-subtle)]">
                        <span class="font-medium">{{ $director['name'] }}</span>
                        <span class="meta">{{ $director['role'] }}</span>
                    </li>
                @endforeach
            </ul>
            <p class="mt-8">
                <a href="{{ route('over.contact') }}" class="btn-text">→ Contact opnemen</a>
            </p>
        </div>
    </section>

@endsection
