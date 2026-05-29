@extends('layouts.app', ['title' => 'Vrijwilligerswerk of stage doen'])

@section('content')
    @include('partials.page-header', [
        'eyebrow' => 'Samenwerken',
        'title'   => 'Vrijwilligerswerk of stage doen',
        'lede'    => '[Placeholder — persona-werk + team email-corpus pending. Concern Dn-19.]',
    ])

    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2>Wat je kan doen</h2>
            <p class="meta">[TBD — wachten op input van het team. Strategy persona-werk loopt.]</p>

            <h2 class="mt-12">Interesse?</h2>
            <p class="mt-4"><a href="#" class="btn-ghost">Mail ons</a></p>
        </div>
    </section>
@endsection
