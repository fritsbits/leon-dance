<?php

namespace App\Filament\Admin\Resources\Ateliers\Tables;

use App\Enums\AtelierType;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AteliersTable
{
    public static function configure(Table $table): Table
    {
        $days = [1 => 'Ma', 2 => 'Di', 3 => 'Wo', 4 => 'Do', 5 => 'Vr', 6 => 'Za', 7 => 'Zo'];

        return $table
            ->defaultSort('sort')
            ->columns([
                TextColumn::make('type')
                    ->label('Type')
                    ->badge()
                    ->formatStateUsing(fn ($state) => $state instanceof AtelierType ? $state->label() : $state),
                TextColumn::make('venue.name')
                    ->label('Locatie')
                    ->searchable(),
                TextColumn::make('day_of_week')
                    ->label('Dag')
                    ->formatStateUsing(fn ($state) => $state ? ($days[$state] ?? $state) : '—'),
                TextColumn::make('start_time')
                    ->label('Start')
                    ->formatStateUsing(fn ($state) => $state ? substr($state, 0, 5) : '—'),
                TextColumn::make('lead')
                    ->label('Begeleider')
                    ->placeholder('—'),
                IconColumn::make('is_active')
                    ->label('Actief')
                    ->boolean(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->toggleable(),
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
