<?php

namespace App\Filament\Admin\Resources\Ateliers\Pages;

use App\Filament\Admin\Resources\Ateliers\AtelierResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAteliers extends ListRecords
{
    protected static string $resource = AtelierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
