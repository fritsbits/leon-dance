{{-- SP-13 Photo block · $src, $alt, $credit (optional), $caption (optional), $variant ('full-width' default | 'contained') --}}
@php $variant ??= 'full-width'; @endphp
@if (!empty($src))
    <section class="section">
        <div class="container-{{ $variant === 'contained' ? 'text' : 'wide' }}">
            <img src="{{ $src }}" alt="{{ $alt ?? '' }}" class="w-full">
            @if (!empty($credit) || !empty($caption))
                <p class="meta mt-3">
                    @isset($credit){{ $credit }}@endisset
                    @if (!empty($credit) && !empty($caption)) · @endif
                    @isset($caption){{ $caption }}@endisset
                </p>
            @endif
        </div>
    </section>
@endif
