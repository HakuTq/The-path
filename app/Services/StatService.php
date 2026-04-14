<?php

namespace App\Services;

class StatService
{
    public function getModifier(int $score): int
    {
        return (int) floor(($score - 10) / 2);
    }

    public function calculateArmorClass($character): int
    {
        $dexScore = $character->ability_scores['DEX'] ?? 10;
        $dexMod = $this->getModifier($dexScore);

        return 10 + $dexMod;
    }
}
