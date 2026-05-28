<?php

namespace Tests\Feature;

use Tests\TestCase;

class PrivacyPageTest extends TestCase
{
    public function test_privacy_page_renders_with_mandatory_disclosures(): void
    {
        $response = $this->get('/privacybeleid');

        $response->assertOk();

        // Controller identity (Art. 13(1)(a))
        $response->assertSee('Leon vzw');
        $response->assertSee('0769.579.192');

        // Lawful basis (Art. 13(1)(c)/(d))
        $response->assertSee('gerechtvaardigd belang');
        $response->assertSee('art. 6.1.f AVG');

        // Third-country transfer + safeguard (Art. 13(1)(f)) — Resend/US
        $response->assertSee('Resend');
        $response->assertSee('EU-VS-Data Privacy Framework');

        // Functional-cookie disclosure (no banner)
        $response->assertSee('technische cookie');

        // Right to complain to the supervisory authority (Art. 13(2)(d))
        $response->assertSee('Gegevensbeschermingsautoriteit');
    }

    public function test_privacy_page_has_no_placeholder_annotations(): void
    {
        $this->get('/privacybeleid')->assertDontSee('[Annotatie');
    }
}
