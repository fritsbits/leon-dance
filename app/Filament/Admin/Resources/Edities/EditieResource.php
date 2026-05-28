<?php

namespace App\Filament\Admin\Resources\Edities;

use App\Filament\Admin\Resources\Edities\Pages\CreateEditie;
use App\Filament\Admin\Resources\Edities\Pages\EditEditie;
use App\Filament\Admin\Resources\Edities\Pages\ListEdities;
use App\Filament\Admin\Resources\Edities\Schemas\EditieForm;
use App\Filament\Admin\Resources\Edities\Tables\EditiesTable;
use App\Models\Editie;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EditieResource extends Resource
{
    protected static ?string $model = Editie::class;

    protected static ?string $slug = 'edities';

    protected static ?string $modelLabel = 'editie';

    protected static ?string $pluralModelLabel = 'edities';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

    public static function form(Schema $schema): Schema
    {
        return EditieForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EditiesTable::configure($table);
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
            'index' => ListEdities::route('/'),
            'create' => CreateEditie::route('/create'),
            'edit' => EditEditie::route('/{record}/edit'),
        ];
    }
}
