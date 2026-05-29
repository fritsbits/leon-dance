{{-- SP-09 Funder/partner wall · $variant ('full' default | 'featured') --}}
@php
    $variant ??= 'full';

    // Strawman partner data. Real list/order arrives via Partner/Funder entity
    // (per 30-structure). Pending Sam/Kristin SharePoint extraction (Dn-23).
    // `logo` references public/images/partners/<file>; null → text-label fallback.
    $tiers = [
        'Met steun van' => [
            ['name' => 'Vlaamse overheid',        'logo' => 'vlaamse-overheid.svg'],
            ['name' => 'VGC',                     'logo' => 'vgc.svg'],
            ['name' => 'Stad Brussel',            'logo' => 'stad-brussel.svg'],
        ],
        'Co-producenten' => [
            ['name' => 'KANAL — Centre Pompidou', 'logo' => 'kanal.svg'],
            ['name' => 'KVS',                     'logo' => 'kvs.png'],
        ],
        'Speelplekken' => [
            ['name' => 'BRONKS',                  'logo' => 'bronks.webp'],
            ['name' => 'CAMPO',                   'logo' => 'campo.svg'],
            ['name' => 'La Monnaie',              'logo' => 'la-monnaie.jpg'],
            ['name' => 'Maison des Cultures',     'logo' => 'maison-des-cultures.svg'],
            ['name' => 'Pianofabriek',            'logo' => 'pianofabriek.svg'],
        ],
        'In samenwerking met' => [
            ['name' => 'KETMET',                  'logo' => null],
            ['name' => 'MUS-E',                   'logo' => 'mus-e.svg'],
            ['name' => 'RITCS',                   'logo' => 'ritcs.svg'],
        ],
    ];

    // Footer (full) is deliberately compact: funders only. Co-producers, venues and
    // collaborators shift often, so they live only on the featured wall (over-leon).
    if ($variant !== 'featured') {
        $tiers = ['Met steun van' => $tiers['Met steun van']];
    }

    // Quiet marks, not boxed tiles: borderless logos in a wrapping row.
    // Definite height (not max-height): some partner SVGs lack intrinsic
    // dimensions and collapse to 0 under a max-height-only constraint in flex.
    $logoH       = $variant === 'featured' ? 'h-10' : 'h-8';
    $rowGap      = $variant === 'featured' ? 'gap-x-10 gap-y-6' : 'gap-x-8 gap-y-4';
    $tierSpacing = $variant === 'featured' ? 'mb-10' : 'mb-0';
@endphp

<section class="section">
    <div class="container-wide">
        @if ($variant === 'featured')
            <h2 class="mb-8">Onze partners</h2>
        @endif

        @foreach ($tiers as $caption => $partners)
            <div class="{{ $tierSpacing }} last:mb-0">
                <p class="meta mb-4">{{ $caption }}</p>
                <ul class="flex flex-wrap items-center {{ $rowGap }}">
                    @foreach ($partners as $partner)
                        <li class="flex items-center">
                            @if ($partner['logo'])
                                <img
                                    src="{{ asset('images/partners/' . $partner['logo']) }}"
                                    alt="{{ $partner['name'] }}"
                                    loading="lazy"
                                    class="{{ $logoH }} w-auto grayscale opacity-60"
                                />
                            @else
                                <span class="meta">{{ $partner['name'] }}</span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</section>
