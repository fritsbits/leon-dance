{{-- SP-05 Project card · $title, $desc, $href, $image (optional), $imageAlt (optional),
     $imagePlaceholder (optional wireframe annotation, shown when no $image),
     $badge (optional), $details (optional array of clarifying meta rows) --}}
<a href="{{ $href }}"
   class="block border border-[var(--color-border)] rounded-[var(--radius)] overflow-hidden no-underline hover:bg-[var(--color-hover)]">
    @if (! empty($image))
        <div class="aspect-[16/9] bg-[var(--color-border-subtle)] overflow-hidden">
            <img src="{{ $image }}" alt="{{ $imageAlt ?? '' }}" class="w-full h-full object-cover">
        </div>
    @elseif (! empty($imagePlaceholder))
        {{-- [asset] wireframe placeholder — vervang door echte foto via $image --}}
        <div class="aspect-[16/9] bg-[var(--color-border-subtle)] flex items-center justify-center">
            <span class="meta px-6 text-center">{{ $imagePlaceholder }}</span>
        </div>
    @endif
    <div class="p-6">
        <span class="block font-medium">
            {{ $title }}
            @if (! empty($badge))
                <span class="meta inline-block ml-2 align-middle border border-[var(--color-border)] rounded-[var(--radius)] px-2 py-0.5">{{ $badge }}</span>
            @endif
        </span>
        <span class="meta block mt-2">{{ $desc }}</span>
        @if (! empty($details))
            <ul class="mt-4 space-y-1">
                @foreach ($details as $row)
                    <li class="meta">{{ $row }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</a>
