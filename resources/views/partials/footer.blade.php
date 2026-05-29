<footer class="border-t border-[var(--color-border)] mt-12">
    {{-- Funder/partner wall — suppressed on home (P-01 §6 already shows it in Featured variant). --}}
    @unless (Route::is('home'))
        @include('partials.funder-wall')
    @endunless

    <div class="border-t border-[var(--color-border-subtle)]">
        <div class="container-wide flex flex-col md:flex-row items-start md:items-center justify-between gap-4 py-6 text-sm">
            <div class="flex flex-wrap items-center gap-x-4 gap-y-1">
                <span class="meta">© {{ date('Y') }} Leon vzw · Brussel</span>
                <a href="{{ route('privacybeleid') }}" class="no-underline">Privacybeleid</a>
            </div>
            <nav class="flex flex-wrap gap-x-6 gap-y-2" aria-label="Footer">
                <a href="{{ route('over.contact') }}" class="no-underline">Contact</a>
                <a href="{{ route('over.index') }}" class="no-underline">Over Leon</a>
            </nav>
        </div>
    </div>
</footer>
