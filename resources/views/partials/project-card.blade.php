{{-- SP-05 Project card · $title, $desc, $href, $image (optional), $imageAlt (optional) --}}
<a href="{{ $href }}"
   class="block border border-[var(--color-border)] rounded-[var(--radius)] overflow-hidden no-underline hover:bg-[var(--color-hover)]">
    @isset($image)
        <div class="aspect-[16/9] bg-[var(--color-border-subtle)] overflow-hidden">
            <img src="{{ $image }}" alt="{{ $imageAlt ?? '' }}" class="w-full h-full object-cover">
        </div>
    @endisset
    <div class="p-6">
        <span class="block font-medium">
            {{ $title }}
            @if (! empty($badge))
                <span class="meta inline-block ml-2 align-middle border border-[var(--color-border)] rounded-[var(--radius)] px-2 py-0.5">{{ $badge }}</span>
            @endif
        </span>
        <span class="meta block mt-2">{{ $desc }}</span>
    </div>
</a>
