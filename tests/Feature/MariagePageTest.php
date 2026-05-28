<?php

namespace Tests\Feature;

use App\Enums\EventType;
use App\Models\Edition;
use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MariagePageTest extends TestCase
{
    use RefreshDatabase;

    private function makeEditie(array $overrides = []): Edition
    {
        return Edition::create(array_merge([
            'project_slug' => 'mariage',
            'slug'         => 'teststad-2026',
            'stad'         => 'Teststad',
            'jaar'         => 2026,
            'starts_at'    => now()->subWeek(),
        ], $overrides));
    }

    private function makeVoorstelling(string $editieSlug, $startsAt, array $overrides = []): Event
    {
        return Event::create(array_merge([
            'type'         => EventType::Voorstelling,
            'title'        => 'Mariage',
            'project_slug' => 'mariage',
            'editie_slug'  => $editieSlug,
            'starts_at'    => $startsAt,
            'is_public'    => true,
        ], $overrides));
    }

    public function test_watch_band_shows_when_a_public_voorstelling_is_near(): void
    {
        $editie = $this->makeEditie();
        $this->makeVoorstelling($editie->slug, now()->addWeeks(3));

        $this->get('/dansateliers-performances/mariage')
            ->assertOk()
            ->assertSee('Binnenkort te zien')
            ->assertSee('Kom kijken');
    }

    public function test_watch_band_hidden_when_voorstelling_is_far_off(): void
    {
        $editie = $this->makeEditie();
        $this->makeVoorstelling($editie->slug, now()->addWeeks(20));

        $this->get('/dansateliers-performances/mariage')
            ->assertOk()
            ->assertDontSee('Binnenkort te zien');
    }

    public function test_watch_band_hidden_when_no_upcoming_voorstelling(): void
    {
        $editie = $this->makeEditie();
        $this->makeVoorstelling($editie->slug, now()->subWeeks(4)); // past

        $this->get('/dansateliers-performances/mariage')
            ->assertOk()
            ->assertDontSee('Binnenkort te zien');
    }

    public function test_non_public_voorstelling_does_not_trigger_watch_band(): void
    {
        $editie = $this->makeEditie();
        $this->makeVoorstelling($editie->slug, now()->addWeeks(3), ['is_public' => false]);

        $this->get('/dansateliers-performances/mariage')
            ->assertOk()
            ->assertDontSee('Binnenkort te zien');
    }

    public function test_page_always_offers_the_commission_cta_and_trailer(): void
    {
        $this->makeEditie();

        $this->get('/dansateliers-performances/mariage')
            ->assertOk()
            ->assertSee('Plan een gesprek')
            ->assertSee(route('samenwerken.opzetten'))
            ->assertSee('player.vimeo.com'); // embedded trailer
    }
}
