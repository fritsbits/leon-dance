<?php

namespace App\Filament\Admin\Resources\Editions\Tables;

use App\Models\Edition;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EditionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('starts_at', 'desc')
            ->columns([
                TextColumn::make('stad')->searchable()->sortable(),
                TextColumn::make('jaar')->sortable(),
                TextColumn::make('periode')->toggleable(),
                TextColumn::make('status')
                    ->badge()
                    ->getStateUsing(fn (Edition $record) => $record->status()),
                IconColumn::make('inschrijving_open')
                    ->label('Open call')
                    ->boolean(),
                TextColumn::make('inschrijving_closes_at')
                    ->label('Sluit op')
                    ->date('d M Y')
                    ->placeholder('—')
                    ->toggleable(),
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
