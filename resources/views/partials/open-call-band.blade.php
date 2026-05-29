{{-- SP-16 Open-call band · props: $editie (Editie|null), $variant ('home'|'project')
     Renders nothing when $editie is null (conditional, self-removing). --}}
@php
    $editie  = $editie ?? null;
    $variant = $variant ?? 'home';
    \Carbon\Carbon::setLocale('nl');
@endphp

@if ($editie)
    @php $label = trim($editie->stad . ' ' . $editie->jaar); @endphp
    <div class="border-y border-[var(--color-border)]">
        <section class="section">
            <div class="container-wide">
                <p class="meta uppercase tracking-wide mb-3">
                    Nieuwe editie{{ $variant === 'project' ? ' · ' . $label : '' }}
                </p>
                <h2 class="mb-3">
                    {{ $variant === 'home'
                        ? 'Mariage ' . $label . '. De groep vormt zich nu.'
                        : 'De groep vormt zich nu. Doe je mee?' }}
                </h2>
                <p class="max-w-[var(--max-content)]">
                    Meedoen kan: open ateliers, repetities en de voorstelling zelf.
                </p>
                @if ($editie->inschrijvingClosesSoon())
                    <p class="meta mt-2">Inschrijven kan tot {{ $editie->inschrijving_closes_at->translatedFormat('j F') }}.</p>
                @endif
                <p class="mt-6">
                    <a href="{{ route('dansateliers.mariage.editie', $editie) }}" class="btn-primary">Ontdek deze editie</a>
                </p>
            </div>
        </section>
    </div>
@endif
