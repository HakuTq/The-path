<?php

namespace App\Enums;

enum ClassFeaturesEnum: string
{
    #region Alchemist
    case bomb = 'bomb';
    case brew_potion = 'brew_potion';
    case mutagen = 'mutagen';
    case throw_anything = 'throw_anything';
        //Discovery is a list class feature
        //case discovery = 'discovery';
    case poison_resistance_1 = 'poison_resistance_1';
    case poison_resistance_2 = 'poison_resistance_2';
    case poison_resistance_3 = 'poison_resistance_3';
    case poison_resistance_4 = 'poison_resistance_4';
    #endregion

    public function label(): string
    {
        return match ($this) {
            #region Alchemist
            self::bomb => 'Bomb',
            self::brew_potion => 'Brew Potion',
            self::mutagen => 'Mutagen',
            self::poison_resistance_1 => 'Poison Resistance',
            self::poison_resistance_2 => 'Poison Resistance',
            self::poison_resistance_3 => 'Poison Resistance',
            self::poison_resistance_4 => 'Poison Immunity',
            #endregion
        };
    }
    public function description(): string
    {
        return match ($this) {
            #region Alchemist
            self::bomb => "In addition to magical extracts, You are adept at swiftly mixing various volatile chemicals and infusing them with magical reserves to create powerful bombs that You can hurl at enemies.
You can use a number of bombs each day equal to your class level + Intelligence modifier. Bombs are unstable, and if not used in the round they are created, they degrade and become inert. Their method of creation prevents large volumes of explosive material from being created and stored.
In order to create a bomb, You must use a small vial containing an ounce of liquid catalyst. You can create this liquid catalyst from small amounts of chemicals from an alchemy lab, and these supplies can be readily refilled in the same manner as a spellcaster's component pouch. You can create a number of catalyst vials at the start of the day equal to the total number of bombs you can create in that day. Once created, a catalyst vial remains usable by You for years.
Drawing the components of, creating, and throwing a bomb requires a standard action that provokes an attack of opportunity. Thrown bombs have a range of 20 feet and use the Throw Splash Weapon special attack. Bombs are considered weapons and can be selected using feats such as Point-Blank Shot and Weapon Focus.
On a direct hit, a bomb inflicts 1d6 points of fire damage + additional damage equal to the Your Intelligence modifier. The damage of Your bomb increases by 1d6 points at every odd-numbered level (this bonus damage is not multiplied on a critical hit or by using feats such as Vital Strike). Splash damage from a bomb is always equal to the bomb's minimum damage (so if the bomb would deal 2d6+4 points of fire damage on a direct hit, its splash damage would be 6 points of fire damage). Those caught in the splash damage can attempt a Reflex save for half damage. The DC of this save is equal to 10 + 1/2 the level + the Your Intelligence modifier.
You can learn new types of bombs as discoveries (see the Discovery ability) as You level up.
A bomb, like an extract, becomes inert if used or carried by anyone else.",
            self::brew_potion => "You receive Brew Potion as a bonus feat. You can brew potions of any formulae you know (up to 3rd level), using your level as caster level. The spell must be one that can be made into a potion. You do not need to meet the prerequisites for this feat.",
            self::mutagen => "You discover how to create a mutagen that can imbibe in order to heighten your physical prowess at the cost of your personality. It takes 1 hour to brew a dose of mutagen, and once brewed, it remains potent until used. You can only maintain one dose of mutagen at a time. If You brew a second dose, any existing mutagen becomes inert. As with an extract or bomb, a mutagen that is not in Your possession becomes inert until you pick it up again.
When You brew a mutagen, select one physical ability score (Strength, Dexterity, Constitution). It is a standard action to drink a mutagen. Upon being imbibed, the mutagen causes You to grow bulkier and more bestial, granting a +2 natural armor bonus and a +4 alchemical bonus to the selected ability score for 10 minutes per level. In addition, while the mutagen is in effect, You take a -2 penalty to one of mental ability scores. If the mutagen enhances your Strength, it applies a penalty to Intelligence. If it enhances your Dexterity, it applies a penalty to your Wisdom. If it enhances your Constitution, it applies a penalty to your Charisma.
If someone else drinks a mutagen they must make a Fortitude save (DC 10 + 1/2 the level + the Your Intelligence modifier) or become nauseated for 1 hour. No one else can gain the benefit of a mutagen, but You can gain the effects of other mutagen if you drinks it. (Although if they create a different mutagen, the effects of the “stolen” mutagen immediately cease.) The effects of a mutagen do not stack. Whenever You drink a mutagen, the effects of any previous mutagen immediately end.",
            #Get it from d20
            self::throw_anything => "",
            self::poison_resistance_1 => "An alchemist gains a +2 bonus on all saving throws against poison",
            self::poison_resistance_2 => "Bonus from Poison Resistance 1 increases to +4.",
            self::poison_resistance_3 => "Bonus from Poison Resistance 2 increases to +6.",
            self::poison_resistance_4 => "You become completely immune to poison.",
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
            self::poison_resistance_2 => 'Resist Poison more',
            self::poison_resistance_3 => 'Resist Poison better',
            self::poison_resistance_4 => 'Immunity to Poison',
            #endregion
        };
    }
    public function type(): ClassFeaturesTypeEnum
    {
        return match ($this) {
            #Alchemist
            self::brew_potion, self::poison_resistance_1, self::poison_resistance_2, self::poison_resistance_3, self::poison_resistance_4
            => ClassFeaturesTypeEnum::Ex,
            #Alcehmist
            self::bomb, self::mutagen
            => ClassFeaturesTypeEnum::Su,
        };
    }
}
