<?php
class BABProgression
{
    const FULL = 'full';
    const THREE_QUARTERS = 'three_quarters';
    const HALF = 'half';
}

class SavesProgression
{
    const GOOD = 'good';
    const BAD = 'bad';
}

class ClassFeatureTypes
{
    const Ex = 'Ex';
}

return [
    'barbarian' => [
        'description' => 'For some, there is only rage. In the ways of their people, in the fury of their passion, in the howl of battle, conflict is all these brutal souls know. Savages, hired muscle, masters of vicious martial techniques, they are not soldiers or professional warriors—they are the battle possessed, creatures of slaughter and spirits of war. Known as barbarians, these warmongers know little of training, preparation, or the rules of warfare; for them, only the moment exists, with the foes that stand before them and the knowledge that the next moment might hold their death. They possess a sixth sense in regard to danger and the endurance to weather all that might entail. These brutal warriors might rise from all walks of life, both civilized and savage, though whole societies embracing such philosophies roam the wild places of the world. Within barbarians storms the primal spirit of battle, and woe to those who face their rage.',
        'role' => 'Barbarians excel in combat, possessing the martial prowess and fortitude to take on foes seemingly far superior to themselves. With rage granting them boldness and daring beyond that of most other warriors, barbarians charge furiously into battle and ruin all who would stand in their way.',
        'alignment' => 'Any non-lawful',
        'hit_die' => 12,
        'starting_wealth' => "3d6x10",
        'class_skills' => [
            'Acrobatics',
            'Climb',
            'Craft',
            'Handle Animal',
            'Intimidate',
            'Knowledge (nature)',
            'Perception',
            'Ride',
            'Survival',
            'Swim',
        ],
        'ranks' => 4,
        'bab' => BABProgression::FULL,
        'fort_save' => SavesProgression::GOOD,
        'ref_save' => SavesProgression::BAD,
        'will_save' => SavesProgression::BAD,
        'weapon_proficiency' => [
            'simple',
            'martial'
        ],
        'armor_proficiency' => [
            'light',
            'medium',
            'shields'
        ],
        'special' => [
            'fast movement' => [
                'level' => 1,
                'type' => classFeatureTypes::Ex,
                'description' => 'A barbarian’s land speed is faster than the norm for her race by +10 feet. This benefit applies only when he is wearing no armor, light armor, or medium armor, and not carrying a heavy load. Apply this bonus before modifying the barbarian’s speed because of any load carried or armor worn. This bonus stacks with any other bonuses to the barbarian’s land speed.',
                'easy' => 'A barbarian is always faster',
                'bonus' => '+10 feet land speed'
            ],
            'rage' => [
                'level' => 1,
                'type' => classFeatureTypes::Ex,
                'description' => 'A barbarian can call upon inner reserves of strength and ferocity, granting her additional combat prowess. Starting at 1st level, a barbarian can rage for a number of rounds per day equal to 4 + her Constitution modifier. At each level after 1st, she can rage for 2 additional rounds. Temporary increases to Constitution, such as those gained from rage and spells like bear’s endurance, do not increase the total number of rounds that a barbarian can rage per day. A barbarian can enter rage as a free action. The total number of rounds of rage per day is renewed after resting for 8 hours, although these hours do not need to be consecutive.
While in rage, a barbarian gains a +4 morale bonus to her Strength and Constitution, as well as a +2 morale bonus on Will saves. In addition, she takes a –2 penalty to Armor Class. The increase to Constitution grants the barbarian 2 hit points per Hit Dice, but these disappear when the rage ends and are not lost first like temporary hit points. While in rage, a barbarian cannot use any Charisma-, Dexterity-, or Intelligence-based skills (except Acrobatics, Fly, Intimidate, and Ride) or any ability that requires patience or concentration.
A barbarian can end her rage as a free action and is fatigued after rage for a number of rounds equal to 2 times the number of rounds spent in the rage. A barbarian cannot enter a new rage while fatigued or exhausted but can otherwise enter rage multiple times during a single encounter or combat. If a barbarian falls unconscious, her rage immediately ends, placing her in peril of death.',
                'easy' => 'A barbarian can fly into a rage and be more powerful for a short time.',
                'bonus' => '+4 Strength, +4 Constitution, +2 Will saves, -2 AC',
            ],
            'rage_powers' => [
                'level' => 2,
                'type' => classFeatureTypes::Ex,
                'description' => 'As a barbarian gains levels, she learns to use her rage in new ways. Starting at 2nd level, a barbarian gains a rage power. She gains another rage power for every two levels of barbarian attained after 2nd level. A barbarian gains the benefits of rage powers only while raging, and some of these powers require the barbarian to take an action first. Unless otherwise noted, a barbarian cannot select an individual power more than once.
Any barbarian who meets the powers’ prerequisites can select and use rage powers. Totem rage powers grant powers related to a theme. A barbarian cannot select from more than one group of totem rage powers; for example, a barbarian who selects a beast totem rage power cannot later choose to gain any of the dragon totem rage powers (any rage power with “dragon totem” in its title).',
                'easy' => 'A barbarian can use her rage in new ways.',
            ],
        ]
    ]
];
