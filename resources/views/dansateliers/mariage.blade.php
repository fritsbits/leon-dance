@php
    \Carbon\Carbon::setLocale('nl');

    $edities = \App\Models\Editie::query()
        ->where('project_slug', 'mariage')
        ->orderByDesc('starts_at')
        ->get();

    $openCall = $edities->first(fn (\App\Models\Editie $e) => $e->isInschrijvingOpen());
@endphp

@extends('layouts.app', ['title' => 'Mariage'])

@section('content')
    @include('partials.page-header', [
        'eyebrow' => 'Participatieve performances · Project',
        'title'   => 'Mariage',
        'lede'    => 'Core-cast + lokale cast · ~10 repetities → voorstelling. Per stad een editie met eigen groep en eigen typed dates.',
    ])

    <section class="section border-t border-[var(--color-border)]">
        <div class="container-wide">
            <h2>Het project</h2>
            <p>[Format documentation · proces · nazorg · continuïteit · evolutie. Bron: Skeleton content brief.]</p>
        </div>
    </section>

    {{-- Promoted open-call band (SP-16 · project variant) · renders only when a call is open --}}
    @include('partials.open-call-band', ['editie' => $openCall, 'variant' => 'project'])

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
@endsection
