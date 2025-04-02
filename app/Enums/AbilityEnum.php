<?php

namespace App\Enums;

enum AbilityEnum: string
{
    case Str = "str";
    case Dex = "dex";
    case Con = "con";
    case Int = "int";
    case Wis = "wis";
    case Cha = "cha";

    public function label(): string
    {
        return match ($this) {
            self::Str => "Strength",
            self::Dex => "Dexterity",
            self::Con => "Constitution",
            self::Int => "Inteligence",
            self::Wis => "Wisdom",
            self::Cha => "Charisma",
        };
    }
}
