{{-- SP-10 Inschrijving form (server-handled · interest-only slice of Dn-03).
     Emails the team, stores nothing. No h2 — lives under the §5 "Inschrijving" heading.
     Array-include: $editieSlug, $intro, $note? (line under intro), $submitLabel? --}}
@php
    $note ??= null;
    $submitLabel ??= 'Schrijf je in';
@endphp

<div id="inschrijving-form">
    @if (session('inschrijving_success'))
        <div class="form-success" role="status">
            <p class="text-[var(--color-text)]">
                Bedankt. Je inschrijving is onderweg. We laten binnen een week iets van ons horen.
            </p>
        </div>
    @else
        <p>{{ $intro }}</p>
        @if ($note)
            <p class="meta mt-2">{{ $note }}</p>
        @endif

        @if ($errors->any())
            <div class="form-error-summary mt-6" role="alert">
                Niet helemaal gelukt. Kijk de gemarkeerde velden even na.
            </div>
        @endif

        <form method="POST" action="{{ route('inschrijving.store') }}" class="mt-6" novalidate>
            @csrf
            <input type="hidden" name="editie" value="{{ $editieSlug }}">

            {{-- Honeypot: off-screen, hidden from people, tempting to bots. Must stay empty. --}}
            <div aria-hidden="true" tabindex="-1" style="position:absolute; left:-9999px;">
                <label for="if-website">Website</label>
                <input type="text" id="if-website" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div class="field {{ $errors->has('naam') ? 'field-error' : '' }}">
                <label for="if-naam">Naam</label>
                <input type="text" id="if-naam" name="naam" class="input"
                       value="{{ old('naam') }}" required>
                @error('naam') <p class="field-error-msg">{{ $message }}</p> @enderror
            </div>

            <div class="field {{ $errors->has('email') ? 'field-error' : '' }}">
                <label for="if-email">E-mail</label>
                <input type="email" id="if-email" name="email" class="input"
                       value="{{ old('email') }}" required>
                @error('email') <p class="field-error-msg">{{ $message }}</p> @enderror
            </div>

            <div class="field">
                <label for="if-bericht">Iets over jezelf <span class="field-optional">(optioneel)</span></label>
                <textarea id="if-bericht" name="bericht" class="input">{{ old('bericht') }}</textarea>
                <p class="meta mt-1">Vertel gerust kort waarom je wil meedoen, of laat het leeg.</p>
            </div>

            <button type="submit" class="btn-primary">{{ $submitLabel }}</button>
        </form>
    @endif
</div>
