<?php

namespace Database\Factories;

use App\Enums\ClassEnum;
use App\Models\Character;
use App\Models\CharacterClass;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CharacterClass>
 */
class CharacterClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'character_id' => Character::factory()->create(),
            'name' => $this->faker->randomElement(ClassEnum::cases()),
            'level' => $this->faker->numberBetween(1, 20),
            'base_health' => [
                1 => $this->faker->numberBetween(1, 10),
                2 => $this->faker->numberBetween(1, 10),
                3 => $this->faker->numberBetween(1, 10),
                4 => $this->faker->numberBetween(1, 10),
                5 => $this->faker->numberBetween(1, 10),
            ]
        ];
    }
}
