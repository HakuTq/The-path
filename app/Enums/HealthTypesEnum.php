<?php

namespace App\Enums;

enum HealthTypesEnum: string
{
    case Average = 'average';
    case Average1stMax = 'average_1st_max';
    case Maximum = 'maximum';
    case Custom = 'custom';
    case Custom1stMax = 'custom_1st_max';

    public function label(): string
    {
        return match ($this) {
            self::Average => 'Average',
            self::Average1stMax => 'Average (1st Max)',
            self::Maximum => 'Maximum',
            self::Custom => 'Custom',
            self::Custom1stMax => 'Custom (1st Max)',
        };
    }
}
