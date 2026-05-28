<?php

namespace App\Enums;

enum AtelierType: string
{
    case Open = 'open';
    case School = 'school';

    public function label(): string
    {
        return match ($this) {
            self::Open => 'Open',
            self::School => 'School',
        };
    }
}
