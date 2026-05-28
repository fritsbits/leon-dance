<?php

namespace App\Filament\Admin\Resources\Events\Schemas;

use App\Enums\EventType;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Wat & wanneer')
                    ->schema([
                        Select::make('type')
                            ->options(collect(EventType::cases())->mapWithKeys(
                                fn (EventType $type) => [$type->value => $type->label()]
                            ))
                            ->required()
                            ->native(false)
                            ->live(),
                        TextInput::make('title')
                            ->label('Activiteit')
                            ->placeholder('bv. Atelier Mariage x MUS-E')
                            ->required()
                            ->maxLength(255),
                        DateTimePicker::make('starts_at')
                            ->label('Begint op')
                            ->seconds(false)
                            ->required(),
                        DateTimePicker::make('ends_at')
                            ->label('Eindigt op')
                            ->seconds(false),
                    ])
                    ->columns(2),

                Section::make('Wie & waar')
                    ->schema([
                        TextInput::make('lead')
                            ->placeholder('bv. Lena, Stef, Team Leon')
                            ->maxLength(255),
                        TextInput::make('venue_name')
                            ->label('Locatie (vrije tekst)')
                            ->placeholder('bv. Pianofabriek')
                            ->maxLength(255),
                        TextInput::make('partners')
                            ->label('Partners (x-grammar)')
                            ->placeholder('bv. MUS-E, Ketmet')
                            ->helperText('Vrije tekst, komma-gescheiden — de "x" tags in de activiteit-titel.')
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Section::make('Koppeling & zichtbaarheid')
                    ->schema([
                        Select::make('atelier_id')
                            ->label('Atelier')
                            ->options(fn () => \App\Models\Atelier::with('venue')->get()->mapWithKeys(
                                fn (\App\Models\Atelier $a) => [$a->id => $a->displayName()]
                            ))
                            ->native(false)
                            ->visible(fn (\Filament\Schemas\Components\Utilities\Get $get) => in_array(
                                $get('type'), [\App\Enums\EventType::OpenAtelier->value, \App\Enums\EventType::Klas->value], true
                            ))
                            ->helperText('Verplicht voor open atelier / klas.'),
                        Select::make('edition_id')
                            ->label('Editie')
                            ->options(fn () => \App\Models\Edition::orderBy('slug')->pluck('slug', 'id'))
                            ->native(false)
                            ->visible(fn (\Filament\Schemas\Components\Utilities\Get $get) => in_array(
                                $get('type'), [\App\Enums\EventType::Repetitie->value, \App\Enums\EventType::TryOut->value, \App\Enums\EventType::Voorstelling->value], true
                            ))
                            ->helperText('Verplicht voor repetitie / try-out / voorstelling.'),
                        Toggle::make('is_public')
                            ->label('Publiek zichtbaar in agenda')
                            ->default(true)
                            ->required(),
                        Textarea::make('notes')
                            ->label('Notities (intern)')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
