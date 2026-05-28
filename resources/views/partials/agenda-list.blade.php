{{-- SP-08 Agenda list · $events, $href (closure fn($event)=>url), $emptyText, $linkLabel?, $linkHref? --}}
@if ($events->isEmpty())
    <p class="meta">{{ $emptyText }}</p>
@else
    <div class="border-t border-[var(--color-border-subtle)]">
        @foreach ($events as $event)
            @include('partials.date-row', [
                'date'     => strtoupper($event->starts_at->isoFormat('dd D.MM')),
                'time'     => $event->starts_at->format('H:i'),
                'type'     => $event->title,
                'location' => $event->venueLabel() ?: '—',
                'href'     => $href($event),
            ])
        @endforeach
    </div>
@endif
@isset($linkLabel)
    <p class="mt-6"><a href="{{ $linkHref }}" class="btn-text">{{ $linkLabel }}</a></p>
@endisset
