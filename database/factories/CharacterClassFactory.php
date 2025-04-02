<?php

namespace Database\Factories;

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
            'name' => $this->faker->word(),
            'level' => $this->faker->numberBetween(1, 20),
            'hit_die' => $this->faker->randomElement([4, 6, 8, 10, 12]), // e.g., 8 for Fighter, 6 for Wizard
            'racial_traits' => json_encode([
                'trait1' => $this->faker->word(),
                'trait2' => $this->faker->word(),
                'trait3' => $this->faker->word(),
            ]),
            'class_features' => json_encode([
                'feature1' => $this->faker->word(),
                'feature2' => $this->faker->word(),
                'feature3' => $this->faker->word(),
            ]),
        ];
    }
}
