<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInschrijvingRequest;
use App\Mail\InschrijvingRequestMail;
use App\Models\Edition;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class InschrijvingController extends Controller
{
    public function store(StoreInschrijvingRequest $request): RedirectResponse
    {
        // Honeypot: bots fill `website`. Drop silently — same response as a real send.
        if (! $request->filled('website')) {
            $data   = $request->validated();
            $editie = Edition::where('slug', $data['editie'])->firstOrFail();

            Mail::to(config('mail.team_address'))->send(new InschrijvingRequestMail([
                'naam'    => $data['naam'],
                'email'   => $data['email'],
                'bericht' => $data['bericht'] ?? null,
                'project' => $editie->project->name,
                'editie'  => trim($editie->stad.' '.$editie->jaar),
            ]));
        }

        return back()
            ->withFragment('inschrijving-form')
            ->with('inschrijving_success', true);
    }
}
