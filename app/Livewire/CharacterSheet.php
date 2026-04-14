<?php

namespace App\Livewire;

use App\Models\Character;
use App\Services\StatService;
use Livewire\Component;

class CharacterSheet extends Component
{
    public Character $character;

    public function render(StatService $statService)
    {
        return view('livewire.character-sheet', [
            'dexModifier' => $statService->getModifier($this->character->ability_scores['DEX']),
            'totalAC' => $statService->calculateArmorClass($this->character)
        ]);
    }
}
