<?php

namespace App\Filament\Admin\Resources\Ateliers\Pages;

use App\Filament\Admin\Resources\Ateliers\AtelierResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAtelier extends EditRecord
{
    protected static string $resource = AtelierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
