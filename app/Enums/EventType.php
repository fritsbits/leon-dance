<?php

namespace App\Enums;

enum EventType: string
{
    case OpenAtelier = 'open_atelier';
    case Klas = 'klas';
    case Repetitie = 'repetitie';
    case TryOut = 'try_out';
    case Voorstelling = 'voorstelling';
    case LeonsWhitePage = 'leons_white_page';
    case LeonRondDeTafel = 'leon_rond_de_tafel';

    public function label(): string
    {
        return match ($this) {
            self::OpenAtelier => 'Open atelier',
            self::Klas => 'Klas',
            self::Repetitie => 'Repetitie',
            self::TryOut => 'Try-out',
            self::Voorstelling => 'Voorstelling',
            self::LeonsWhitePage => 'Leons White Page',
            self::LeonRondDeTafel => 'Leon rond de tafel',
        };
    }

    public function isInternal(): bool
    {
        return in_array($this, [self::LeonsWhitePage, self::LeonRondDeTafel], true);
    }
}
