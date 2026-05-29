<?php

namespace App\Filament\Admin\Resources\Ateliers\Schemas;

use App\Enums\AtelierType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AtelierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Atelier')
                    ->schema([
                        Select::make('type')
                            ->label('Type')
                            ->options(collect(AtelierType::cases())->mapWithKeys(
                                fn (AtelierType $type) => [$type->value => $type->label()]
                            ))
                            ->required()
                            ->native(false),
                        Select::make('venue_id')
                            ->label('Locatie')
                            ->relationship('venue', 'name')
                            ->native(false)
                            ->searchable()
                            ->preload(),
                        TextInput::make('name')
                            ->label('Naam')
                            ->placeholder('bv. Atelier Leon')
                            ->maxLength(255),
                        TextInput::make('lead')
                            ->label('Begeleider')
                            ->placeholder('bv. Lena')
                            ->helperText('Naam van wie dit atelier geeft. Verschijnt op de atelierpagina onder "Wie begeleidt?". Eén naam volstaat, geen vertaling nodig.')
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Section::make('Wanneer')
                    ->schema([
                        Select::make('day_of_week')
                            ->label('Dag')
                            ->options([
                                1 => 'Maandag', 2 => 'Dinsdag', 3 => 'Woensdag', 4 => 'Donderdag',
                                5 => 'Vrijdag', 6 => 'Zaterdag', 7 => 'Zondag',
                            ])
                            ->native(false),
                        TimePicker::make('start_time')
                            ->label('Start')
                            ->seconds(false),
                        TimePicker::make('end_time')
                            ->label('Einde')
                            ->seconds(false),
                    ])
                    ->columns(3),

                Section::make('Pagina & zichtbaarheid')
                    ->schema([
                        TextInput::make('slug')
                            ->label('URL-slug')
                            ->placeholder('pianofabriek')
                            ->helperText('Bepaalt de URL: /atelier-leon/{slug}. Een open atelier met een slug krijgt een eigen pagina.')
                            ->maxLength(255),
                        TextInput::make('sort')
                            ->label('Volgorde')
                            ->numeric()
                            ->default(0),
                        Toggle::make('is_active')
                            ->label('Actief')
                            ->default(true),
                    ])
                    ->columns(3),
            ]);
    }
}
