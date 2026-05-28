<?php

namespace App\Filament\Admin\Resources\Editions\Pages;

use App\Filament\Admin\Resources\Editions\EditionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEditions extends ListRecords
{
    protected static string $resource = EditionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
