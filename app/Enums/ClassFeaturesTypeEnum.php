<?php

namespace App\Enums;

enum ClassFeaturesTypeEnum : string
{
    case Ex = 'Ex';
    case None = 'None';
    case Su = 'Su';
    case Sp = 'Sp';

    public function label(): string
    {
        return match ($this) {
            self::Ex => 'Extraordinary',
            self::None => 'None',
            self::Su => 'Supernatural',
            self::Sp => 'Spell-like',
        };
    }
}
