<?php

namespace Tests\Feature;

use App\Mail\ContactRequestMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    private function validPayload(array $overrides = []): array
    {
        return array_merge([
            'naam'        => 'Jan Jansen',
            'email'       => 'jan@example.org',
            'organisatie' => 'Cultuurhuis X',
            'bericht'     => 'We willen de mobiele dansstudio boeken in juli.',
            'onderwerp'   => 'mobiele-dansstudio',
            'website'     => '', // honeypot must be empty
        ], $overrides);
    }

    public function test_valid_submission_sends_mail_and_redirects_with_success(): void
    {
        Mail::fake();

        $response = $this->from('/dansateliers-performances/mobiele-dansstudio')
            ->post('/contact', $this->validPayload());

        $response->assertRedirect();
        $response->assertSessionHas('contact_success', true);

        Mail::assertSent(ContactRequestMail::class, function (ContactRequestMail $mail) {
            return $mail->hasTo(config('mail.team_address'))
                && $mail->hasReplyTo('jan@example.org');
        });
    }

    public function test_missing_required_fields_are_rejected_without_mail(): void
    {
        Mail::fake();

        $this->post('/contact', $this->validPayload([
            'naam' => '', 'email' => '', 'bericht' => '',
        ]))->assertSessionHasErrors(['naam', 'email', 'bericht']);

        Mail::assertNothingSent();
    }

    public function test_invalid_onderwerp_is_rejected(): void
    {
        Mail::fake();

        $this->post('/contact', $this->validPayload(['onderwerp' => 'bogus']))
            ->assertSessionHasErrors('onderwerp');

        Mail::assertNothingSent();
    }

    public function test_honeypot_filled_is_silently_dropped(): void
    {
        Mail::fake();

        $response = $this->post('/contact', $this->validPayload([
            'website' => 'http://spam.example',
        ]));

        $response->assertSessionHas('contact_success', true);
        $response->assertSessionHasNoErrors();
        Mail::assertNothingSent();
    }

    // Data-minimisation note: there is intentionally NO model/migration for
    // contact requests — submissions are emailed only, never persisted.
}
