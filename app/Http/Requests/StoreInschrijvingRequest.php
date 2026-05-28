<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInschrijvingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'naam'    => ['required', 'string', 'max:120'],
            'email'   => ['required', 'email', 'max:190'],
            'bericht' => ['nullable', 'string', 'max:4000'],
            'editie'  => ['required', 'exists:editions,slug'],
        ];
    }

    public function messages(): array
    {
        return [
            'naam.required'   => 'Vul je naam in.',
            'email.required'  => 'Vul je e-mailadres in.',
            'email.email'     => 'Dit lijkt geen geldig e-mailadres.',
            'editie.required' => 'Er ging iets mis met het formulier. Probeer opnieuw.',
            'editie.exists'   => 'Er ging iets mis met het formulier. Probeer opnieuw.',
        ];
    }
}
