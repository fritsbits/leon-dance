@extends('layouts.app', [
    'title' => 'Over Leon: wie we zijn, hoe we werken, hoe je ons bereikt',
    'description' => '16 jaar bezig, 5 jaar vzw. Leon maakt participatieve dans in Brussel. Vijf pagina\'s over missie, impact, team, historiek en contact.',
])

@section('content')

    {{-- §1 Subpage top (SP-04 variant C — index, no eyebrow, short routing-promise lede) --}}
    @include('partials.page-header', [
        'title' => 'Over Leon',
        'lede'  => 'Vijf pagina\'s die samen vertellen wie Leon is, hoe het werkt en hoe je ons bereikt.',
    ])

    {{-- §2 Opener (institutional dial high — TOV §Over Leon: "16 jaar bezig, 5 jaar vzw") --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-text">
            <p class="text-lg">
                16 jaar bezig, 5 jaar vzw. We dansen en werken in Brussel: met scholen,
                welzijnsorganisaties, partners en de mensen die mee willen doen.
            </p>
        </div>
    </section>

    {{-- §3 Card grid (5 × SP-05 text-only · order locked per 30-structure §Over Leon) --}}
    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <ul class="grid md:grid-cols-2 gap-6">
                @foreach (\App\Support\SiteSections::overLeon() as $card)
                    <li>@include('partials.project-card', $card)</li>
                @endforeach
            </ul>
        </div>
    </section>

@endsection
