<?php

namespace Tests\Feature;

use App\Filament\Admin\Resources\Editions\EditionResource;
use App\Models\Edition;
use Tests\TestCase;

class EditionResourceTest extends TestCase
{
    public function test_resource_is_wired_to_the_editie_model(): void
    {
        $this->assertSame(Edition::class, EditionResource::getModel());
    }
}
