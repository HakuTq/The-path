<?php

/*
return [
    'barbarian' => [
        'description' => '',
        'role' => '',
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
            'uncanny_dodge' => [
                'level' => 2,
                'type' => classFeatureTypes::Ex,
                'description' => 'At 2nd level, a barbarian gains the ability to react to danger before her senses would normally allow her to do so. She cannot be caught flat-footed, nor does she lose her Dex bonus to AC if the attacker is invisible. She still loses her Dexterity bonus to armor class if immobilized. A barbarian with this ability can still lose her Dexterity bonus to armor class if an opponent successfully uses the feint action against her.
If a barbarian already has uncanny dodge from a different class, she automatically gains improved uncanny dodge (see below) instead.',
                'easy' => 'react to danger before senses would normally allow to do so'
            ],
            'trap_sense' => [
                'level' => 3,
                'type' => classFeatureTypes::Ex,
                'description' => 'At 3rd level, a barbarian gains a +1 bonus on Reflex saves made to avoid traps and a +1 dodge bonus to armor class against attacks made by traps. These bonuses increase by +1 every three barbarian levels thereafter (6th, 9th, 12th, 15th, and 18th level). Trap sense bonuses gained from multiple classes stack.',
                'easy' => 'Avoids traps easily',
                'progression' => 3,
            ],
            'improved_uncanny_dodge' => [
                'level' => 5,
                'type' => classFeatureTypes::Ex,
                'description' => 'At 5th level and higher, a barbarian can no longer be flanked. This defense denies a rogue the ability to sneak attack the barbarian by flanking her, unless the attacker has at least four more rogue levels than the target has barbarian levels.
If a character already has uncanny dodge (see above) from another class, the levels from the classes that grant uncanny dodge stack to determine the minimum rogue level required to flank the character.',
                'easy' => 'A barbarian can no longer be flanked'
            ]
        ]
    ]
];
*/