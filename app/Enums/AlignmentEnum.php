<?php

namespace App\Enums;

enum AlignmentEnum: string
{
    case LG = 'Lawful Good';
    case NG = 'Neutral Good';
    case CG = 'Chaotic Good';
    case LN = 'Lawful Neutral';
    case TN = 'True Neutral';
    case CN = 'Chaotic Neutral';
    case LE = 'Lawful Evil';
    case NE = 'Neutral Evil';
    case CE = 'Chaotic Evil';
}