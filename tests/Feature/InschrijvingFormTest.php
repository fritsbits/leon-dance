<?php

namespace Tests\Feature;

use App\Mail\InschrijvingRequestMail;
use App\Models\Edition;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class InschrijvingFormTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $project = \App\Models\Project::firstOrCreate(
            ['slug' => 'mariage'],
            ['name' => 'Mariage'],
        );

        Edition::create([
            'project_id'        => $project->id,
            'slug'              => 'brussel-2026',
            'stad'              => 'Brussel',
            'jaar'              => 2026,
            'starts_at'         => '2026-09-01',
            'inschrijving_open' => true,
        ]);
    }

    private function validPayload(array $overrides = []): array
    {
        return array_merge([
            'naam'    => 'Lou Peeters',
            'email'   => 'lou@example.org',
            'bericht' => 'Ik dans graag mee deze editie.',
            'editie'  => 'brussel-2026',
            'website' => '', // honeypot must be empty
        ], $overrides);
    }

    public function test_valid_submission_sends_mail_and_redirects_with_success(): void
    {
        Mail::fake();

        $response = $this->from('/dansateliers-performances/mariage/brussel-2026')
            ->post('/inschrijving', $this->validPayload());

        $response->assertRedirect();
        $response->assertSessionHas('inschrijving_success', true);

        Mail::assertSent(InschrijvingRequestMail::class, function (InschrijvingRequestMail $mail) {
            return $mail->hasTo(config('mail.team_address'))
                && $mail->hasReplyTo('lou@example.org');
        });
    }

    public function test_missing_required_fields_are_rejected_without_mail(): void
    {
        Mail::fake();

        $this->post('/inschrijving', $this->validPayload([
            'naam' => '', 'email' => '',
        ]))->assertSessionHasErrors(['naam', 'email']);

        Mail::assertNothingSent();
    }

    public function test_bericht_is_optional(): void
    {
        Mail::fake();

        $this->post('/inschrijving', $this->validPayload(['bericht' => '']))
            ->assertSessionHasNoErrors()
            ->assertSessionHas('inschrijving_success', true);

        Mail::assertSent(InschrijvingRequestMail::class);
    }

    public function test_unknown_editie_is_rejected(): void
    {
        Mail::fake();

        $this->post('/inschrijving', $this->validPayload(['editie' => 'bestaat-niet']))
            ->assertSessionHasErrors('editie');

        Mail::assertNothingSent();
    }

    public function test_honeypot_filled_is_silently_dropped(): void
    {
        Mail::fake();

        $response = $this->post('/inschrijving', $this->validPayload([
            'website' => 'http://spam.example',
        ]));

        $response->assertSessionHas('inschrijving_success', true);
        $response->assertSessionHasNoErrors();
        Mail::assertNothingSent();
    }

    public function test_endpoint_is_rate_limited(): void
    {
        Mail::fake();

        foreach (range(1, 5) as $ignored) {
            $this->post('/inschrijving', $this->validPayload())->assertRedirect();
        }

        $this->post('/inschrijving', $this->validPayload())->assertStatus(429);
    }

    // Data-minimisation: like the contact slice, inschrijving-interest is emailed
    // to the team only — there is intentionally NO applications table or model.
}
