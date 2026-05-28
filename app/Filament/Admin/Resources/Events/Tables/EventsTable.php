<?php

namespace App\Filament\Admin\Resources\Events\Tables;

use App\Enums\EventType;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('starts_at', 'desc')
            ->columns([
                TextColumn::make('starts_at')
                    ->label('Wanneer')
                    ->dateTime('d M Y · H:i')
                    ->sortable(),
                TextColumn::make('type')
                    ->badge()
                    ->formatStateUsing(fn (EventType $state) => $state->label()),
                TextColumn::make('title')
                    ->label('Activiteit')
                    ->searchable()
                    ->wrap(),
                TextColumn::make('lead')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('venue_name')
                    ->label('Locatie')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('practice_slug')
                    ->label('Practice')
                    ->toggleable(),
                TextColumn::make('project_slug')
                    ->label('Project')
                    ->toggleable(),
                IconColumn::make('is_public')
                    ->label('Publiek')
                    ->boolean()
                    ->toggleable(),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options(collect(EventType::cases())->mapWithKeys(
                        fn (EventType $type) => [$type->value => $type->label()]
                    )),
                SelectFilter::make('practice_slug')
                    ->label('Practice')
                    ->options([
                        'atelier-leon' => 'Atelier Leon',
                        'leon-op-school' => 'Leon op school',
                    ]),
                SelectFilter::make('project_slug')
                    ->label('Project')
                    ->options([
                        'mariage' => 'Mariage',
                    ]),
                TernaryFilter::make('is_public')->label('Publiek'),
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
