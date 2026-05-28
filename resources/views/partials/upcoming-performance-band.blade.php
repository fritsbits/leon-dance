{{-- Upcoming-performance band · props: $performance (App\Models\Event|null)
     Promotes the next public Mariage voorstelling when it is near. The recruitment band
     (SP-16) carries the editie while the group forms; this band takes over as the closing
     voorstelling approaches and routes the public to come watch. Renders nothing when null. --}}
@php
    $performance = $performance ?? null;
    \Carbon\Carbon::setLocale('nl');
@endphp

@if ($performance)
    <div class="border-y border-[var(--color-border)]">
        <section class="section">
            <div class="container-wide">
                <p class="meta uppercase tracking-wide mb-3">Binnenkort te zien</p>
                <h2 class="mb-3">{{ $performance->title }}</h2>
                <p class="max-w-[var(--max-content)]">
                    {{ $performance->lead
                        ?? 'Een Mariage-editie sluit af met een voorstelling in de publieke ruimte. Iedereen is welkom, dansen mag.' }}
                </p>
                <p class="meta mt-2">
                    {{ ucfirst($performance->starts_at->translatedFormat('l j F')) }}, {{ $performance->starts_at->format('H.i') }}u
                    @if ($performance->venueLabel()) · {{ $performance->venueLabel() }} @endif
                </p>
                <p class="mt-6">
                    <a href="{{ route('agenda', ['project' => 'mariage', 'type' => 'voorstelling']) }}" class="btn-primary">Kom kijken</a>
                </p>
            </div>
        </section>
    </div>
@endif
