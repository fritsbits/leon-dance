{{-- SP-11 Contact form (server-handled). Array-include:
     $heading, $intro, $onderwerp (mobiele-dansstudio|participatief-project|algemeen),
     $berichtHelp? (helper under bericht), $submitLabel? --}}
@php
    $berichtHelp ??= null;
    $submitLabel ??= 'Verstuur aanvraag';
@endphp

<div id="contact-form">
    <h2 class="mb-4">{{ $heading }}</h2>

    @if (session('contact_success'))
        <div class="form-success" role="status">
            <p class="text-[var(--color-text)]">
                Bedankt. Je aanvraag is onderweg. We laten binnen een week iets van ons horen.
            </p>
        </div>
    @else
        <p class="mb-8">{{ $intro }}</p>

        @if ($errors->any())
            <div class="form-error-summary" role="alert">
                Niet helemaal gelukt. Kijk de gemarkeerde velden even na.
            </div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}" novalidate>
            @csrf
            <input type="hidden" name="onderwerp" value="{{ $onderwerp }}">

            {{-- Honeypot: off-screen, hidden from people, tempting to bots. Must stay empty. --}}
            <div aria-hidden="true" tabindex="-1" style="position:absolute; left:-9999px;">
                <label for="cf-website">Website</label>
                <input type="text" id="cf-website" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div class="field {{ $errors->has('naam') ? 'field-error' : '' }}">
                <label for="cf-naam">Naam</label>
                <input type="text" id="cf-naam" name="naam" class="input"
                       value="{{ old('naam') }}" required>
                @error('naam') <p class="field-error-msg">{{ $message }}</p> @enderror
            </div>

            <div class="field {{ $errors->has('email') ? 'field-error' : '' }}">
                <label for="cf-email">E-mail</label>
                <input type="email" id="cf-email" name="email" class="input"
                       value="{{ old('email') }}" required>
                @error('email') <p class="field-error-msg">{{ $message }}</p> @enderror
            </div>

            <div class="field">
                <label for="cf-organisatie">Organisatie <span class="field-optional">(optioneel)</span></label>
                <input type="text" id="cf-organisatie" name="organisatie" class="input"
                       value="{{ old('organisatie') }}">
            </div>

            <div class="field {{ $errors->has('bericht') ? 'field-error' : '' }}">
                <label for="cf-bericht">Je bericht</label>
                <textarea id="cf-bericht" name="bericht" class="input" required>{{ old('bericht') }}</textarea>
                @if ($berichtHelp) <p class="meta mt-1">{{ $berichtHelp }}</p> @endif
                @error('bericht') <p class="field-error-msg">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="btn-primary">{{ $submitLabel }}</button>
        </form>
    @endif
</div>
