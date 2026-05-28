<?php

namespace App\Filament\Admin\Resources\Editions;

use App\Filament\Admin\Resources\Editions\Pages\CreateEdition;
use App\Filament\Admin\Resources\Editions\Pages\EditEdition;
use App\Filament\Admin\Resources\Editions\Pages\ListEditions;
use App\Filament\Admin\Resources\Editions\Schemas\EditionForm;
use App\Filament\Admin\Resources\Editions\Tables\EditionsTable;
use App\Models\Edition;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EditionResource extends Resource
{
    protected static ?string $model = Edition::class;

    protected static ?string $slug = 'edities';

    protected static ?string $modelLabel = 'editie';

    protected static ?string $pluralModelLabel = 'edities';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

    public static function form(Schema $schema): Schema
    {
        return EditionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EditionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEditions::route('/'),
            'create' => CreateEdition::route('/create'),
            'edit' => EditEdition::route('/{record}/edit'),
        ];
    }
}
