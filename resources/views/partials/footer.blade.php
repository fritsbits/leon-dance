<footer class="border-t border-[var(--color-border)] mt-12">
    {{-- Funder/partner wall — suppressed on home (P-01 §6 already shows it in Featured variant). --}}
    @unless (Route::is('home'))
        @include('partials.funder-wall')
    @endunless

    <div class="border-t border-[var(--color-border-subtle)]">
        <div class="container-wide flex flex-col md:flex-row items-start md:items-center justify-between gap-4 py-6 text-sm">
            <div class="meta">© Leon vzw · Brussel</div>
            <ul class="flex flex-wrap gap-x-6 gap-y-2">
                <li><a href="{{ route('over.contact') }}" class="no-underline">Contact</a></li>
                <li><a href="{{ route('over.index') }}" class="no-underline">Over Leon</a></li>
                <li class="meta">NL · FR · EN</li>
                <li><a href="{{ route('privacybeleid') }}" class="no-underline">Privacybeleid</a></li>
            </ul>
        </div>
    </div>
</footer>
