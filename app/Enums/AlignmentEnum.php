<?php

namespace App\Enums;

enum AlignmentEnum: string
{
    case LG = 'lawful_good';
    case LN = 'lawful_neutral';
    case LE = 'lawful_evil';
    case NG = 'neutral_good';
    case NN = 'neutral_neutral';
    case NE = 'neutral_evil';
    case CG = 'chaotic_good';
    case CN = 'chaotic_neutral';
    case CE = 'chaotic_evil';

    public function label(): string
    {
        return match ($this) {
            self::LG => 'Lawful Good',
            self::NG => 'Neutral Good',
            self::CG => 'Chaotic Good',
            self::LN => 'Lawful Neutral',
            self::NN => 'True Neutral',
            self::CN => 'Chaotic Neutral',
            self::LE => 'Lawful Evil',
            self::NE => 'Neutral Evil',
            self::CE => 'Chaotic Evil',
        };
    }
}
