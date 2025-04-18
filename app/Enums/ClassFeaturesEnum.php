<?php

namespace App\Enums;

use function Pest\Laravel\get;

enum ClassFeaturesEnum: string
{
    #region Alchemist
    case bomb = 'bomb';
    case brew_potion = 'brew_potion';
    case mutagen = 'mutagen';
    case throw_anything = 'throw_anything';
        //Discovery is a list class feature
    case poison_resistance_1 = 'poison_resistance_1';
    case poison_resistance_2 = 'poison_resistance_2';
    case poison_resistance_3 = 'poison_resistance_3';
    case poison_resistance_4 = 'poison_resistance_4';
    case poison_use = 'poison_use';
    case swift_alchemy = 'swift_alchemy';
    case swift_poisoning = 'swift_poisoning';
    case persistent_mutagen  = 'persistent_mutagen';
    case instant_alchemy = 'instant_alchemy';
    //Grand Discovery is a list class feature
    #endregion

    private static function loadData(): array
    {
        static $data = null;

        if ($data === null) {
            $path = resource_path("data/classFeatures.json");
            $data = json_decode(file_get_contents($path), true);
        }

        return $data;
    }
    private function getFromJSON(string $val): string
    {
        return self::loadData()[$this->value][$val] ?? '';
    }

    public function label(): string
    {
        return $this->getFromJSON('label');
    }

    public function easy(): string
    {
        return $this->getFromJSON('easy');
    }

    //Use with {!! !!}
    public function description(): string
    {
        return nl2br($this->getFromJSON('description'));
    }
}
