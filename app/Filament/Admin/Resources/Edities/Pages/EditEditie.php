<?php

namespace App\Filament\Admin\Resources\Edities\Pages;

use App\Filament\Admin\Resources\Edities\EditieResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEditie extends EditRecord
{
    protected static string $resource = EditieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
