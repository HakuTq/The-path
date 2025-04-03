<?php

namespace App\Enums;

enum SkillsEnum: string
{
    case Acrobatics = 'acrobatics';
    case Appraise = 'appraise';
    case Artistry = 'artistry';
    case Bluff = 'bluff';
    case Climb = 'climb';
    case Craft  = 'craft';
    case Diplomacy = 'diplomacy';
    case DisableDevice = 'disable_device';
    case Disguise = 'disguise';
    case EscapeArtist = 'escape_artist';
    case Fly = 'fly';
    case HandleAnimal = 'handle_animal';
    case Heal = 'heal';
    case Intimidate = 'intimidate';
    case KnowledgeArcana = 'knowledge_arcana';
    case KnowledgeDungeoneering = 'knowledge_dungeoneering';
    case KnowledgeEngineering = 'knowledge_engineering';
    case KnowledgeGeography = 'knowledge_geography';
    case KnowledgeHistory = 'knowledge_history';
    case KnowledgeLocal = 'knowledge_local';
    case KnowledgeNature = 'knowledge_nature';
    case KnowledgeNobility = 'knowledge_nobility';
    case KnowledgePlanes = 'knowledge_planes';
    case KnowledgeReligion = 'knowledge_religion';
    case Linguistics = 'linguistics';
    case Lore = 'lore';
    case Perception = 'perception';
    case Perform = 'perform';
    case Profession = 'profession';
    case Ride = 'ride';
    case SenseMotive = 'sense_motive';
    case SleightOfHand = 'sleight_of_hand';
    case Spellcraft = 'spellcraft';
    case Stealth = 'stealth';
    case Survival = 'survival';
    case Swim = 'swim';
    case UseMagicDevice = 'use_magic_device';

    #region Label
    public function label(): string
    {
        return match ($this) {
            self::Acrobatics => 'Acrobatics',
            self::Appraise => 'Appraise',
            self::Artistry => 'Artistry',
            self::Bluff => 'Bluff',
            self::Climb => 'Climb',
            self::Craft  => 'Craft',
            self::Diplomacy => 'Diplomacy',
            self::DisableDevice => 'Disable Device',
            self::Disguise => 'Disguise',
            self::EscapeArtist => 'Escape Artist',
            self::Fly => 'Fly',
            self::HandleAnimal => 'Handle Animal',
            self::Heal => 'Heal',
            self::Intimidate => 'Intimidate',
            self::KnowledgeArcana => 'Knowledge Arcana',
            self::KnowledgeDungeoneering => 'Knowledge Dungeoneering',
            self::KnowledgeEngineering => 'Knowledge Engineering',
            self::KnowledgeGeography => 'Knowledge Geography',
            self::KnowledgeHistory => 'Knowledge History',
            self::KnowledgeLocal => 'Knowledge Local',
            self::KnowledgeNature => 'Knowledge Nature',
            self::KnowledgeNobility => 'Knowledge Nobility',
            self::KnowledgePlanes => 'Knowledge Planes',
            self::KnowledgeReligion => 'Knowledge Religion',
            self::Linguistics => 'Linguistics',
            self::Lore => 'Lore',
            self::Perception => 'Perception',
            self::Perform => 'Perform',
            self::Profession => 'Profession',
            self::Ride => 'Ride',
            self::SenseMotive => 'Sense Motive',
            self::SleightOfHand => 'Sleight of Hand',
            self::Spellcraft => 'Spellcraft',
            self::Stealth => 'Stealth',
            self::Survival => 'Survival',
            self::Swim => 'Swim',
            self::UseMagicDevice => 'Use Magic Device'
        };
    }
    #endregion
    #region IsUntrained
    public function isUntrained(): bool
    {
        return match ($this) {
            self::Acrobatics,
            self::Appraise,
            self::Bluff,
            self::Climb,
            self::Diplomacy,
            self::Disguise,
            self::EscapeArtist,
            self::Fly,
            self::Heal,
            self::Intimidate,
            self::Perception,
            self::Profession,
            self::Ride,
            self::SenseMotive,
            self::Stealth,
            self::Survival,
            self::Swim => true,
            default => false
        };
    }
    #endregion
    #region TiedAbility
    public function tiedAbility(): AbilityEnum
    {
        return match ($this) {
            self::Climb,
            self::Swim => AbilityEnum::Str,
            self::Acrobatics,
            self::EscapeArtist,
            self::Fly,
            self::Ride,
            self::DisableDevice,
            self::Stealth,
            self::SleightOfHand => AbilityEnum::Dex,
            self::KnowledgeArcana,
            self::KnowledgeDungeoneering,
            self::KnowledgeEngineering,
            self::KnowledgeGeography,
            self::KnowledgeHistory,
            self::KnowledgeLocal,
            self::KnowledgeNature,
            self::KnowledgeNobility,
            self::KnowledgePlanes,
            self::KnowledgeReligion,
            self::Spellcraft,
            self::Craft,
            self::Linguistics,
            self::Lore,
            self::Appraise,
            self::Artistry => AbilityEnum::Int,
            self::Profession,
            self::Survival,
            self::SenseMotive,
            self::Heal,
            self::Perception => AbilityEnum::Wis,
            self::Bluff,
            self::Disguise,
            self::HandleAnimal,
            self::Intimidate,
            self::Diplomacy,
            self::Perform,
            self::UseMagicDevice => AbilityEnum::Cha,
        };
    }
    #endregion
    #region HasArmorCheckPenalty
    public function hasArmorCheckPenalty(): bool
    {
        return match ($this) {
            self::Climb,
            self::EscapeArtist,
            self::Stealth,
            self::Swim => true,
            default => false
        };
    }
    #endregion
}
