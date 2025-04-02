<?php

namespace App\Enums;

enum SavesProgressionEnum: string
{
    case GOOD = 'good';
    case BAD = 'bad';

    public function label(): string
    {
        return match ($this) {
            self::GOOD => 'Good',
            self::BAD => 'Bad'
        };
    }
}
