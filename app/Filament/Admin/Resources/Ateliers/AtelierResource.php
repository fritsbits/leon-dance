<?php

namespace App\Filament\Admin\Resources\Ateliers;

use App\Filament\Admin\Resources\Ateliers\Pages\CreateAtelier;
use App\Filament\Admin\Resources\Ateliers\Pages\EditAtelier;
use App\Filament\Admin\Resources\Ateliers\Pages\ListAteliers;
use App\Filament\Admin\Resources\Ateliers\Schemas\AtelierForm;
use App\Filament\Admin\Resources\Ateliers\Tables\AteliersTable;
use App\Models\Atelier;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AtelierResource extends Resource
{
    protected static ?string $model = Atelier::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static ?string $navigationLabel = 'Ateliers';

    protected static ?string $modelLabel = 'atelier';

    protected static ?string $pluralModelLabel = 'ateliers';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AtelierForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AteliersTable::configure($table);
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
            'index' => ListAteliers::route('/'),
            'create' => CreateAtelier::route('/create'),
            'edit' => EditAtelier::route('/{record}/edit'),
        ];
    }
}
