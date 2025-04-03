<?php

namespace Database\Factories;

use App\Enums\AbilityEnum;
use App\Enums\AlignmentEnum;
use App\Enums\HealthTypesEnum;
use App\Enums\SkillsEnum;
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
            'user_id' => User::factory()->create(),
            'name' => "John " . $this->faker->name(),
            'health_type' => $this->faker->randomElement(HealthTypesEnum::cases())->value,
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
                AbilityEnum::Str->value => $this->faker->numberBetween(3, 18),
                AbilityEnum::Dex->value => $this->faker->numberBetween(3, 18),
                AbilityEnum::Con->value => $this->faker->numberBetween(3, 18),
                AbilityEnum::Int->value => $this->faker->numberBetween(3, 18),
                AbilityEnum::Wis->value => $this->faker->numberBetween(3, 18),
                AbilityEnum::Cha->value => $this->faker->numberBetween(3, 18),
            ],
            'feats' => [
                $this->faker->word(),
                $this->faker->word(),
                $this->faker->word()
            ],
            'skill_ranks' => [
                $this->faker->randomElement(SkillsEnum::cases())->value => $this->faker->numberBetween(0, 10),
                $this->faker->randomElement(SkillsEnum::cases())->value => $this->faker->numberBetween(0, 10),
                $this->faker->randomElement(SkillsEnum::cases())->value => $this->faker->numberBetween(0, 10),
                $this->faker->randomElement(SkillsEnum::cases())->value => $this->faker->numberBetween(0, 10),
                $this->faker->randomElement(SkillsEnum::cases())->value => $this->faker->numberBetween(0, 10),
            ]
        ];
    }
}
