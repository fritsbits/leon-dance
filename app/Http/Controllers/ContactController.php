<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactRequestMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request): RedirectResponse
    {
        // Honeypot: bots fill `website`. Drop silently — same response as a real send.
        if (! $request->filled('website')) {
            Mail::to(config('mail.team_address'))
                ->send(new ContactRequestMail($request->validated()));
        }

        return back()
            ->withFragment('contact-form')
            ->with('contact_success', true);
    }
}
