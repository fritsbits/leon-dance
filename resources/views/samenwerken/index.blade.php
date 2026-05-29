@extends('layouts.app', [
    'title' => 'Samenwerken · Leon',
    'description' => 'Drie manieren om met Leon samen te werken: een participatief dansproject opzetten, de mobiele dansstudio uitnodigen, of vrijwilligerswerk of stage doen.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant C — index-shape) --}}
    @include('partials.page-header', [
        'eyebrow' => 'Overzicht',
        'title'   => 'Samenwerken',
        'lede'    => 'Drie manieren om met Leon in zee te gaan. Kies de ingang die bij jouw vraag past. Elk pad heeft zijn eigen contactlijn.',
    ])

    {{-- §2 Link-list — 3 text-link rows (peer doors; substitutes for single CTA per BG-3) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <ul class="border-t border-[var(--color-border-subtle)]">
                @foreach (\App\Support\SiteSections::samenwerken() as $row)
                    <li class="border-b border-[var(--color-border-subtle)]">
                        <a href="{{ $row['href'] }}"
                           class="block py-6 no-underline hover:bg-[var(--color-hover)]">
                            <span class="block font-medium">
                                <span aria-hidden="true">→</span> {{ $row['label'] }}
                            </span>
                            <span class="meta block mt-2 max-w-[var(--max-content)]">
                                {{ $row['sub'] }}
                                @if ($row['tag'])
                                    <span class="meta ml-1">[{{ $row['tag'] }}]</span>
                                @endif
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

@endsection
