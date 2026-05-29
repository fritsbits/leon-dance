{{-- $eyebrow, $title, $lede, $eyebrowHref? (links the eyebrow back to a parent index) --}}
<section class="section">
    <div class="container-wide">
        @isset($eyebrow)
            <p class="meta uppercase tracking-wide mb-3">
                @isset($eyebrowHref)
                    <a href="{{ $eyebrowHref }}" class="no-underline hover:text-[var(--color-text)]">{{ $eyebrow }}</a>
                @else
                    {{ $eyebrow }}
                @endisset
            </p>
        @endisset
        <h1>{{ $title }}</h1>
        @isset($lede)
            <p class="mt-4 text-lg max-w-[var(--max-content)]">{{ $lede }}</p>
        @endisset
    </div>
</section>
