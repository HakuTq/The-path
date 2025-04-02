<?php

namespace App\Enums;

enum BABEnum: string
{
    case FULL = 'full';
    case THREE_QUARTERS = 'three_quarters';
    case HALF = 'half';

    public function label(): string
    {
        return match ($this) {
            self::FULL => 'Full',
            self::THREE_QUARTERS => 'Three-Quarters',
            self::HALF => 'Half'
        };
    }
}
