{{-- SP-07 Date-row · $date, $time, $type, $location, $href --}}
<a href="{{ $href }}"
   class="flex flex-col md:flex-row md:items-baseline md:gap-4 py-3 border-b border-[var(--color-border-subtle)] no-underline hover:bg-[var(--color-hover)] -mx-3 px-3 rounded-[var(--radius)]">
    <span class="meta shrink-0 md:w-40">{{ $date }} · {{ $time }}</span>
    <span class="flex-1">{{ $type }} · {{ $location }}</span>
</a>
