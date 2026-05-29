<?php

namespace App\Filament\Admin\Resources\Venues\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class VenueForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Locatie')
                    ->schema([
                        TextInput::make('name')
                            ->label('Naam')
                            ->placeholder('bv. Pianofabriek')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('area')
                            ->label('Gemeente / buurt')
                            ->placeholder('bv. Sint-Gillis')
                            ->maxLength(255),
                        TextInput::make('address')
                            ->label('Adres')
                            ->placeholder('bv. Fortstraat 35, 1060 Sint-Gillis')
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Kaart')
                    ->description('Coördinaten voor de kaart op de atelierpagina. Vind ze via openstreetmap.org: rechtsklik op de plek → "Toon adres".')
                    ->schema([
                        TextInput::make('lat')
                            ->label('Latitude')
                            ->placeholder('50.8282')
                            ->numeric(),
                        TextInput::make('lng')
                            ->label('Longitude')
                            ->placeholder('4.3423')
                            ->numeric(),
                    ])
                    ->columns(2),

                Section::make('Foto van de buitenkant')
                    ->description('Een foto van de buitenkant van het gebouw, zodat een bezoeker de ingang herkent als die toekomt.')
                    ->schema([
                        FileUpload::make('photo')
                            ->label('Foto')
                            ->image()
                            ->disk('public')
                            ->directory('venues')
                            ->imageEditor()
                            ->maxSize(5120)
                            ->helperText('JPG of PNG, max 5 MB. Liefst landschap (breder dan hoog).'),
                        TextInput::make('photo_credit')
                            ->label('Fotocredit')
                            ->placeholder('© Fotograaf')
                            ->maxLength(255),
                    ])
                    ->columns(1),
            ]);
    }
}
