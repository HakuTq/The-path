<?php

namespace Database\Factories;

use App\Enums\AlignmentEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => "John " . $this->faker->name(),
            'gold' => $this->faker->numberBetween(0, 1000),
            'alignment' => $this->faker->randomElement(AlignmentEnum::cases())->value,
            'race' => $this->faker->randomElement([
                'Human',
                'Elf',
                'Dwarf',
                'Halfling',
                'Dragonborn',
                'Gnome',
                'Half-Elf',
                'Half-Orc',
                'Tiefling'
            ]),
            'ability_scores' => [
                'Str' => $this->faker->numberBetween(3, 18),
                'Dex' => $this->faker->numberBetween(3, 18),
                'Con' => $this->faker->numberBetween(3, 18),
                'Int' => $this->faker->numberBetween(3, 18),
                'Wis' => $this->faker->numberBetween(3, 18),
                'Cha' => $this->faker->numberBetween(3, 18),
            ],
            'feats' => [
                $this->faker->word(),
                $this->faker->word(),
                $this->faker->word()
            ],
            'skills' => [
                $this->faker->word(),
                $this->faker->word(),
                $this->faker->word()
            ]
        ];
    }
}
