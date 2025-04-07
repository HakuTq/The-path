<?php

namespace App\Enums;

enum ClassFeaturesEnum: string
{
    #region Alchemist
    case bomb = 'bomb';
    case brew_potion = 'brew_potion';
    case mutagen = 'mutagen';
        //Throw Anything is a free feat
        //case throw_anything = 'throw_anything';
        //Discovery is a list class feature
        //case discovery = 'discovery';
    case poison_resistance_1 = 'poison_resistance_1';
    case poison_resistance_2 = 'poison_resistance_2';
    #endregion

    public function label(): string
    {
        return match ($this) {
            #region Alchemist
            self::bomb => 'Bomb',
            self::brew_potion => 'Brew Potion',
            self::mutagen => 'Mutagen',
            self::poison_resistance_1 => 'Poison Resistance 1',
            self::poison_resistance_2 => 'Poison Resistance 2',
            #endregion
        };
    }
    public function description(): string
    {
        return match ($this) {
            #region Alchemist
            self::bomb => "In addition to magical extracts, alchemists are adept at swiftly mixing various volatile chemicals and infusing them with their magical reserves to create powerful bombs that they can hurl at their enemies. An alchemist can use a number of bombs each day equal to his class level + his Intelligence modifier. Bombs are unstable, and if not used in the round they are created, they degrade and become inert—their method of creation prevents large volumes of explosive material from being created and stored. In order to create a bomb, the alchemist must use a small vial containing an ounce of liquid catalyst—the alchemist can create this liquid catalyst from small amounts of chemicals from an alchemy lab, and these supplies can be readily refilled in the same manner as a spellcaster’s component pouch. Most alchemists create a number of catalyst vials at the start of the day equal to the total number of bombs they can create in that day—once created, a catalyst vial remains usable by the alchemist for years.
Drawing the components of, creating, and throwing a bomb requires a standard action that provokes an attack of opportunity. Thrown bombs have a range of 20 feet and use the Throw Splash Weapon special attack. Bombs are considered weapons and can be selected using feats such as Point-Blank Shot and Weapon Focus. On a direct hit, an alchemist’s bomb inflicts 1d6 points of fire damage + additional damage equal to the alchemist’s Intelligence modifier. The damage of an alchemist’s bomb increases by 1d6 points at every odd-numbered alchemist level (this bonus damage is not multiplied on a critical hit or by using feats such as Vital Strike). Splash damage from an alchemist bomb is always equal to the bomb’s minimum damage (so if the bomb would deal 2d6+4 points of fire damage on a direct hit, its splash damage would be 6 points of fire damage). Those caught in the splash damage can attempt a Reflex save for half damage. The DC of this save is equal to 10 + 1/2 the alchemist’s level + the alchemist’s Intelligence modifier.
Alchemists can learn new types of bombs as discoveries (see the Discovery ability) as they level up. An alchemist’s bomb, like an extract, becomes inert if used or carried by anyone else.",
            self::brew_potion => "Alchemists receive Brew Potion as a bonus feat. An alchemist can brew potions of any formulae he knows (up to 3rd level), using his alchemist level as his caster level. The spell must be one that can be made into a potion. The alchemist does not need to meet the prerequisites for this feat.",
            self::mutagen => "Alchemist discovers how to create a mutagen that he can imbibe in order to heighten his physical prowess at the cost of his personality. It takes 1 hour to brew a dose of mutagen, and once brewed, it remains potent until used. An alchemist can only maintain one dose of mutagen at a time—if he brews a second dose, any existing mutagen becomes inert. As with an extract or bomb, a mutagen that is not in an alchemist’s possession becomes inert until an alchemist picks it up again.
When an alchemist brews a mutagen, he selects one physical ability score—either Strength, Dexterity, or Constitution. It’s a standard action to drink a mutagen. Upon being imbibed, the mutagen causes the alchemist to grow bulkier and more bestial, granting him a +2 natural armor bonus and a +4 alchemical bonus to the selected ability score for 10 minutes per alchemist level. In addition, while the mutagen is in effect, the alchemist takes a –2 penalty to one of his mental ability scores. If the mutagen enhances his Strength, it applies a penalty to his Intelligence. If it enhances his Dexterity, it applies a penalty to his Wisdom. If it enhances his Constitution, it applies a penalty to his Charisma.
A non-alchemist who drinks a mutagen must make a Fortitude save (DC 10 + 1/2 the alchemist’s level + the alchemist’s Intelligence modifier) or become nauseated for 1 hour—a non-alchemist can never gain the benefit of a mutagen, but an alchemist can gain the effects of another alchemist’s mutagen if he drinks it. (Although if the other alchemist creates a different mutagen, the effects of the “stolen” mutagen immediately cease.) The effects of a mutagen do not stack. Whenever an alchemist drinks a mutagen, the effects of any previous mutagen immediately end.",
            self::poison_resistance_1 => "An alchemist gains a +2 bonus on all saving throws against poison. This bonus increases to +4 at 5th level, and then again to +6 at 8th level.",
            self::poison_resistance_2 => "At 10th level, an alchemist becomes completely immune to poison.",
            #endregion
        };
    }

    public function easy(): string
    {
        return match ($this) {
            #region Alchemist
            self::bomb => 'Damage Foes with your Exploding Bombs',
            self::brew_potion => 'Create Potions of all kinds',
            self::mutagen => 'Enhance your Physical State',
            self::poison_resistance_1 => 'Resist Poison',
            self::poison_resistance_2 => 'Immunity to Poison',
            #endregion
        };
    }
    public function type(): ClassFeaturesTypeEnum
    {
        return match ($this) {
            self::brew_potion, self::poison_resistance_1, self::poison_resistance_2
            => ClassFeaturesTypeEnum::Ex,
            self::bomb, self::mutagen
            => ClassFeaturesTypeEnum::Su,
        };
    }
}
