<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'naam'        => ['required', 'string', 'max:120'],
            'email'       => ['required', 'email', 'max:190'],
            'organisatie' => ['nullable', 'string', 'max:160'],
            'bericht'     => ['required', 'string', 'max:4000'],
            'onderwerp'   => ['required', 'in:mobiele-dansstudio,participatief-project,algemeen'],
        ];
    }

    public function messages(): array
    {
        return [
            'naam.required'      => 'Vul je naam in.',
            'email.required'     => 'Vul je e-mailadres in.',
            'email.email'        => 'Dit lijkt geen geldig e-mailadres.',
            'bericht.required'   => 'Schrijf even een bericht.',
            'onderwerp.required' => 'Er ging iets mis met het formulier. Probeer opnieuw.',
            'onderwerp.in'       => 'Er ging iets mis met het formulier. Probeer opnieuw.',
        ];
    }
}
