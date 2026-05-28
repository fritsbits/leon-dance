<?php

namespace App\Filament\Admin\Resources\Editions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EditionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Editie')
                    ->schema([
                        TextInput::make('project_slug')->default('mariage')->required()->maxLength(255),
                        TextInput::make('slug')->required()->maxLength(255)
                            ->helperText('URL-segment, bv. molenbeek-2026'),
                        TextInput::make('stad')->required()->maxLength(255),
                        TextInput::make('jaar')->numeric()->required(),
                        TextInput::make('stadgenoot')->placeholder('Brusselaars')->maxLength(255),
                        TextInput::make('periode')->placeholder('maart – mei 2024')->maxLength(255),
                        DatePicker::make('starts_at')->label('Begint op')->required(),
                        DatePicker::make('ends_at')->label('Eindigt op'),
                    ])
                    ->columns(2),

                Section::make('Partner & locatie')
                    ->schema([
                        TextInput::make('partner')->maxLength(255),
                        Textarea::make('locaties')->rows(2)->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Groep')
                    ->schema([
                        TextInput::make('groep_size')->label('Groepsgrootte')->maxLength(255),
                        TextInput::make('groep_age')->label('Leeftijdsrange')->maxLength(255),
                        Textarea::make('groep_prose_intro')->label('Groep-tekst')->rows(4)->columnSpanFull(),
                        Textarea::make('quote')->rows(2)->columnSpanFull(),
                        TextInput::make('quote_attr')->label('Quote-bron')->maxLength(255),
                    ])
                    ->columns(2),

                Section::make('Inschrijving')
                    ->schema([
                        Toggle::make('inschrijving_open')
                            ->label('Inschrijving open (open call)')
                            ->helperText('Zet aan om de open call op de site te tonen (home, Mariage, overzicht).'),
                        DatePicker::make('inschrijving_closes_at')
                            ->label('Sluit automatisch op')
                            ->helperText('Leeg = blijft open tot je hem zelf uitzet.'),
                    ])
                    ->columns(2),
            ]);
    }
}
