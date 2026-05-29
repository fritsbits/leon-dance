{{-- SP-12 Quote / testimony · $quote, $attribution, $context (optional), $variant ('inline' default | 'standalone') --}}
@php $variant ??= 'inline'; @endphp
@if (!empty($quote))
    @if ($variant === 'standalone')
        <figure class="container-text">
            <blockquote class="text-2xl md:text-3xl leading-snug text-[var(--color-text)]">
                &ldquo;{{ $quote }}&rdquo;
            </blockquote>
            <figcaption class="meta mt-6">
                &mdash; {{ $attribution }}@isset($context) · {{ $context }}@endisset
            </figcaption>
        </figure>
    @else
        <figure class="container-text bg-[var(--color-surface-muted)] rounded-[var(--radius)] p-8 md:p-12">
            <blockquote class="text-xl leading-snug text-[var(--color-text)]">
                &ldquo;{{ $quote }}&rdquo;
            </blockquote>
            <figcaption class="meta mt-4">
                &mdash; {{ $attribution }}@isset($context) · {{ $context }}@endisset
            </figcaption>
        </figure>
    @endif
@endif
