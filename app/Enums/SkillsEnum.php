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
    public function label() : string {
        return match($this){
            self::Acrobatics => 'Acrobatics',
            self:: Appraise => 'Appraise',
            self:: Artistry=> 'Artistry',
            self:: Bluff => 'Bluff',
            self:: Climb => 'Climb',
            self:: Craft  => 'Craft',
            self:: Diplomacy => 'Diplomacy',
            self:: DisableDevice => 'Disable Device',
            self:: Disguise => 'Disguise',
            self:: EscapeArtist => 'Escape Artist',
            self:: Fly => 'Fly',
            self:: HandleAnimal => 'Handle Animal',
            self:: Heal => 'Heal',
            self:: Intimidate => 'Intimidate',
            self:: KnowledgeArcana => 'Knowledge Arcana',
            self:: KnowledgeDungeoneering => 'Knowledge Dungeoneering',
            self:: KnowledgeEngineering => 'Knowledge Engineering',
            self:: KnowledgeGeography => 'Knowledge Geography',
            self:: KnowledgeHistory => 'Knowledge History',
            self:: KnowledgeLocal => 'Knowledge Local',
            self:: KnowledgeNature => 'Knowledge Nature',
            self:: KnowledgeNobility => 'Knowledge Nobility',
            self:: KnowledgePlanes => 'Knowledge Planes',
            self:: KnowledgeReligion => 'Knowledge Religion',
            self:: Linguistics => 'Linguistics',
            self:: Lore => 'Lore',
            self:: Perception => 'Perception',
            self:: Perform => 'Perform',
            self:: Profession => 'Profession',
            self:: Ride => 'Ride',
            self:: SenseMotive => 'Sense Motive',
            self:: SleightOfHand => 'Sleight of Hand',
            self:: Spellcraft => 'Spellcraft',
            self:: Stealth => 'Stealth',
            self:: Survival => 'Survival',
            self:: Swim => 'Swim',
            self:: UseMagicDevice => 'Use Magic Device'
        };
    }
    #endregion
    #region IsUntrained
    public function isUntrained() : bool {
        return match($this){
            self::Acrobatics => true,
            self:: Appraise => true,
            self:: Artistry=> false,
            self:: Bluff => true,
            self:: Climb => true,
            self:: Craft  => false,
            self:: Diplomacy => true,
            self:: DisableDevice => false,
            self:: Disguise => true,
            self:: EscapeArtist => true,
            self:: Fly => true,
            self:: HandleAnimal => false,
            self:: Heal => true,
            self:: Intimidate => true,
            self:: KnowledgeArcana => false,
            self:: KnowledgeDungeoneering => false,
            self:: KnowledgeEngineering =>false,
            self:: KnowledgeGeography => false,
            self:: KnowledgeHistory =>false,
            self:: KnowledgeLocal => false,
            self:: KnowledgeNature => false,
            self:: KnowledgeNobility => false,
            self:: KnowledgePlanes => false,
            self:: KnowledgeReligion => false,
            self:: Linguistics => false,
            self:: Lore => false,
            self:: Perception => true,
            self:: Perform => false,
            self:: Profession => true,
            self:: Ride => true,
            self:: SenseMotive => true,
            self:: SleightOfHand => false,
            self:: Spellcraft => false,
            self:: Stealth => true,
            self:: Survival => true,
            self:: Swim => true,
            self:: UseMagicDevice => false
        };
    }
    #endregion
}
