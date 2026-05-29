<?php

namespace App\Filament\Admin\Resources\Venues\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VenuesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->label('Foto')
                    ->disk('public')
                    ->height(40),
                TextColumn::make('name')
                    ->label('Naam')
                    ->searchable(),
                TextColumn::make('area')
                    ->label('Buurt')
                    ->searchable(),
                TextColumn::make('address')
                    ->label('Adres')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('lat')
                    ->label('Lat')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('lng')
                    ->label('Lng')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
