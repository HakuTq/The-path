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

    #region Class Information
    public function classInformation(): array
    {
        return [
            'label' => $this->label(),
            'description' => $this->description(),
            'role' => $this->role(),
            'alignment' => $this->alignment(),
            'hit_die' => $this->hitDie(),
            'starting_wealth' => $this->startingWealth(),
            'class_skills' => $this->classSkills(),
            'ranks' => $this->ranks(),
            'BAB' => $this->BAB(),
            'saves' => $this->saves(),
        ];
    }
    #endregion
    #region Label
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
    #endregion
    #region Description
    public function description(): string
    {
        return match ($this) {
            self::Alchemist => 'Alchemist',
            self::Antipaladin => 'Antipaladin',
            self::Arcanist => 'Arcanist',
            self::Barbarian => 'For some, there is only rage. In the ways of their people, in the fury of their passion, in the howl of battle, conflict is all these brutal souls know. Savages, hired muscle, masters of vicious martial techniques, they are not soldiers or professional warriors—they are the battle possessed, creatures of slaughter and spirits of war. Known as barbarians, these warmongers know little of training, preparation, or the rules of warfare; for them, only the moment exists, with the foes that stand before them and the knowledge that the next moment might hold their death. They possess a sixth sense in regard to danger and the endurance to weather all that might entail. These brutal warriors might rise from all walks of life, both civilized and savage, though whole societies embracing such philosophies roam the wild places of the world. Within barbarians storms the primal spirit of battle, and woe to those who face their rage.',
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
    #endregion
    #region Role
    public function role(): string
    {
        return match ($this) {
            self::Alchemist => 'Alchemist',
            self::Antipaladin => 'Antipaladin',
            self::Arcanist => 'Arcanist',
            self::Barbarian => 'Barbarians excel in combat, possessing the martial prowess and fortitude to take on foes seemingly far superior to themselves. With rage granting them boldness and daring beyond that of most other warriors, barbarians charge furiously into battle and ruin all who would stand in their way.',
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
    #endregion
    #region Alignment
    public function alignment(): array
    {
        return match ($this) {
            self::Alchemist => 'Alchemist',
            self::Antipaladin => 'Antipaladin',
            self::Arcanist => 'Arcanist',
            self::Barbarian => [AlignmentEnum::CE, AlignmentEnum::CG, AlignmentEnum::CN, AlignmentEnum::NE, AlignmentEnum::NN, AlignmentEnum::NG],
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
    #endregion
    #region Hit Dice
    public function hitDie(): string
    {
        return match ($this) {
            self::Alchemist => 'Alchemist',
            self::Antipaladin => 'Antipaladin',
            self::Arcanist => 'Arcanist',
            self::Barbarian => 'For some, there is only rage. In the ways of their people, in the fury of their passion, in the howl of battle, conflict is all these brutal souls know. Savages, hired muscle, masters of vicious martial techniques, they are not soldiers or professional warriors—they are the battle possessed, creatures of slaughter and spirits of war. Known as barbarians, these warmongers know little of training, preparation, or the rules of warfare; for them, only the moment exists, with the foes that stand before them and the knowledge that the next moment might hold their death. They possess a sixth sense in regard to danger and the endurance to weather all that might entail. These brutal warriors might rise from all walks of life, both civilized and savage, though whole societies embracing such philosophies roam the wild places of the world. Within barbarians storms the primal spirit of battle, and woe to those who face their rage.',
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
    #endregion
    #region Starting Wealth
    public function startingWealth(): string
    {
        return match ($this) {
            self::Alchemist => 'Alchemist',
            self::Antipaladin => 'Antipaladin',
            self::Arcanist => 'Arcanist',
            self::Barbarian => 'For some, there is only rage. In the ways of their people, in the fury of their passion, in the howl of battle, conflict is all these brutal souls know. Savages, hired muscle, masters of vicious martial techniques, they are not soldiers or professional warriors—they are the battle possessed, creatures of slaughter and spirits of war. Known as barbarians, these warmongers know little of training, preparation, or the rules of warfare; for them, only the moment exists, with the foes that stand before them and the knowledge that the next moment might hold their death. They possess a sixth sense in regard to danger and the endurance to weather all that might entail. These brutal warriors might rise from all walks of life, both civilized and savage, though whole societies embracing such philosophies roam the wild places of the world. Within barbarians storms the primal spirit of battle, and woe to those who face their rage.',
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
    #endregion
    #region Class Skills
    public function classSkills(): string
    {
        return match ($this) {
            self::Alchemist => 'Alchemist',
            self::Antipaladin => 'Antipaladin',
            self::Arcanist => 'Arcanist',
            self::Barbarian => 'For some, there is only rage. In the ways of their people, in the fury of their passion, in the howl of battle, conflict is all these brutal souls know. Savages, hired muscle, masters of vicious martial techniques, they are not soldiers or professional warriors—they are the battle possessed, creatures of slaughter and spirits of war. Known as barbarians, these warmongers know little of training, preparation, or the rules of warfare; for them, only the moment exists, with the foes that stand before them and the knowledge that the next moment might hold their death. They possess a sixth sense in regard to danger and the endurance to weather all that might entail. These brutal warriors might rise from all walks of life, both civilized and savage, though whole societies embracing such philosophies roam the wild places of the world. Within barbarians storms the primal spirit of battle, and woe to those who face their rage.',
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
    #endregion
    #region Ranks
    public function ranks(): string
    {
        return match ($this) {
            self::Alchemist => 'Alchemist',
            self::Antipaladin => 'Antipaladin',
            self::Arcanist => 'Arcanist',
            self::Barbarian => 'For some, there is only rage. In the ways of their people, in the fury of their passion, in the howl of battle, conflict is all these brutal souls know. Savages, hired muscle, masters of vicious martial techniques, they are not soldiers or professional warriors—they are the battle possessed, creatures of slaughter and spirits of war. Known as barbarians, these warmongers know little of training, preparation, or the rules of warfare; for them, only the moment exists, with the foes that stand before them and the knowledge that the next moment might hold their death. They possess a sixth sense in regard to danger and the endurance to weather all that might entail. These brutal warriors might rise from all walks of life, both civilized and savage, though whole societies embracing such philosophies roam the wild places of the world. Within barbarians storms the primal spirit of battle, and woe to those who face their rage.',
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
    #endregion
    #region Base Attack Bonus
    public function BAB(): string
    {
        return match ($this) {
            self::Alchemist => 'Alchemist',
            self::Antipaladin => 'Antipaladin',
            self::Arcanist => 'Arcanist',
            self::Barbarian => 'For some, there is only rage. In the ways of their people, in the fury of their passion, in the howl of battle, conflict is all these brutal souls know. Savages, hired muscle, masters of vicious martial techniques, they are not soldiers or professional warriors—they are the battle possessed, creatures of slaughter and spirits of war. Known as barbarians, these warmongers know little of training, preparation, or the rules of warfare; for them, only the moment exists, with the foes that stand before them and the knowledge that the next moment might hold their death. They possess a sixth sense in regard to danger and the endurance to weather all that might entail. These brutal warriors might rise from all walks of life, both civilized and savage, though whole societies embracing such philosophies roam the wild places of the world. Within barbarians storms the primal spirit of battle, and woe to those who face their rage.',
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
    #endregion
    #region Saves
    public function saves(): string
    {
        return match ($this) {
            self::Alchemist => 'Alchemist',
            self::Antipaladin => 'Antipaladin',
            self::Arcanist => 'Arcanist',
            self::Barbarian => 'For some, there is only rage. In the ways of their people, in the fury of their passion, in the howl of battle, conflict is all these brutal souls know. Savages, hired muscle, masters of vicious martial techniques, they are not soldiers or professional warriors—they are the battle possessed, creatures of slaughter and spirits of war. Known as barbarians, these warmongers know little of training, preparation, or the rules of warfare; for them, only the moment exists, with the foes that stand before them and the knowledge that the next moment might hold their death. They possess a sixth sense in regard to danger and the endurance to weather all that might entail. These brutal warriors might rise from all walks of life, both civilized and savage, though whole societies embracing such philosophies roam the wild places of the world. Within barbarians storms the primal spirit of battle, and woe to those who face their rage.',
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
    #endregion
    #region Proficiencies (Armor, Weapons)
    public function proficiencies(): string
    {
        return match ($this) {
            self::Alchemist => 'Alchemist',
            self::Antipaladin => 'Antipaladin',
            self::Arcanist => 'Arcanist',
            self::Barbarian => 'For some, there is only rage. In the ways of their people, in the fury of their passion, in the howl of battle, conflict is all these brutal souls know. Savages, hired muscle, masters of vicious martial techniques, they are not soldiers or professional warriors—they are the battle possessed, creatures of slaughter and spirits of war. Known as barbarians, these warmongers know little of training, preparation, or the rules of warfare; for them, only the moment exists, with the foes that stand before them and the knowledge that the next moment might hold their death. They possess a sixth sense in regard to danger and the endurance to weather all that might entail. These brutal warriors might rise from all walks of life, both civilized and savage, though whole societies embracing such philosophies roam the wild places of the world. Within barbarians storms the primal spirit of battle, and woe to those who face their rage.',
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
    #endregion
    #region Special (Class Features)
    public function special(): string
    {
        return match ($this) {
            self::Alchemist => 'Alchemist',
            self::Antipaladin => 'Antipaladin',
            self::Arcanist => 'Arcanist',
            self::Barbarian => 'For some, there is only rage. In the ways of their people, in the fury of their passion, in the howl of battle, conflict is all these brutal souls know. Savages, hired muscle, masters of vicious martial techniques, they are not soldiers or professional warriors—they are the battle possessed, creatures of slaughter and spirits of war. Known as barbarians, these warmongers know little of training, preparation, or the rules of warfare; for them, only the moment exists, with the foes that stand before them and the knowledge that the next moment might hold their death. They possess a sixth sense in regard to danger and the endurance to weather all that might entail. These brutal warriors might rise from all walks of life, both civilized and savage, though whole societies embracing such philosophies roam the wild places of the world. Within barbarians storms the primal spirit of battle, and woe to those who face their rage.',
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
    #endregion
    #endregion
    public function __toString(): string
    {
        return $this->label();
    }
}
