<?php

namespace App\Filament\Admin\Resources\Edities\Pages;

use App\Filament\Admin\Resources\Edities\EditieResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEdities extends ListRecords
{
    protected static string $resource = EditieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
