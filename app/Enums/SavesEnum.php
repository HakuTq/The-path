<?php

namespace App\Enums;

enum SavesEnum: string
{
    case will = 'will';
    case reflex = 'reflex';
    case fortitude = 'fortitude';

    public function label(): string
    {
        return match ($this) {
            self::will => 'Will',
            self::reflex => 'Reflex',
            self::fortitude => 'Fortitude'
        };
    }
}
