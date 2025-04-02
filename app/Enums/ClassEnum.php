<?php

namespace App\Enums;

enum ClassEnum: string
{
    case Alchemist = 'alchemist';
    case Antipaladin = 'antipaladin';
    case Arcanist = 'arcanist';
    case Barbarian = 'barbarian';
    case Bard = 'bard';
    case Bloodrager = 'bloodrager';
    case Brawler = 'brawler';
    case Cavalier = 'cavalier';
    case Cleric = 'cleric';
    case Druid = 'druid';
    case Fighter = 'fighter';
    case Gunslinger = 'gunslinger';
    case Hunter = 'hunter';
    case Inquisitor = 'inquisitor';
    case Investigator = 'investigator';
    case Kineticist = 'kineticist';
    case Magus = 'magus';
    case Medium = 'medium';
    case Mesmerist = 'mesmerist';
    case Monk = 'monk';
    case Ninja = 'ninja';
    case Occultist = 'occultist';
    case Oracle = 'oracle';
    case Paladin = 'paladin';
    case Psychic = 'psychic';
    case Ranger = 'ranger';
    case Rogue = 'rogue';
    case Samurai = 'samurai';
    case Shaman = 'shaman';
    case Shifter = 'shifter';
    case Skald = 'skald';
    case Slayer = 'slayer';
    case Sorcerer = 'sorcerer';
    case Spiritualist = 'spiritualist';
    case Summoner = 'summoner';
    case Swashbuckler = 'swashbuckler';
    case VampireHunter = 'vampirehunter';
    case Vigilante = 'vigilante';
    case Warpriest = 'warpriest';
    case Witch = 'witch';
    case Wizard = 'wizard';

    public function label(): string
    {
        return match ($this) {
            self::Alchemist => 'Alchemist',
            self::Antipaladin => 'Antipaladin',
            self::Arcanist => 'Arcanist',
            self::Barbarian => 'Barbarian',
            self::Bard => 'Bard',
            self::Bloodrager => 'Bloodrager',
            self::Brawler => 'Brawler',
            self::Cavalier => 'Cavalier',
            self::Cleric => 'Cleric',
            self::Druid => 'Druid',
            self::Fighter => 'Fighter',
            self::Gunslinger => 'Gunslinger',
            self::Hunter => 'Hunter',
            self::Inquisitor => 'Inquisitor',
            self::Investigator => 'Investigator',
            self::Kineticist => 'Kineticist',
            self::Magus => 'Magus',
            self::Medium => 'Medium',
            self::Mesmerist => 'Mesmerist',
            self::Monk => 'Monk',
            self::Ninja => 'Ninja',
            self::Occultist => 'Occultist',
            self::Oracle => 'Oracle',
            self::Paladin => 'Paladin',
            self::Psychic => 'Psychic',
            self::Ranger => 'Ranger',
            self::Rogue => 'Rogue',
            self::Samurai => 'Samurai',
            self::Shaman => 'Shaman',
            self::Shifter => 'Shifter',
            self::Skald => 'Skald',
            self::Slayer => 'Slayer',
            self::Sorcerer => 'Sorcerer',
            self::Spiritualist => 'Spiritualist',
            self::Summoner => 'Summoner',
            self::Swashbuckler => 'Swashbuckler',
            self::VampireHunter => 'Vampire Hunter',
            self::Vigilante => 'Vigilante',
            self::Warpriest => 'Warpriest',
            self::Witch => 'Witch',
            self::Wizard => 'Wizard',
        };
    }
}
