<?php

namespace Tests\Feature;

use App\Filament\Admin\Resources\Edities\EditieResource;
use App\Models\Editie;
use Tests\TestCase;

class EditieResourceTest extends TestCase
{
    public function test_resource_is_wired_to_the_editie_model(): void
    {
        $this->assertSame(Editie::class, EditieResource::getModel());
    }
}
