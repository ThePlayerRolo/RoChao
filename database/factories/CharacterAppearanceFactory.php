<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CharacterAppearance>
 */
class CharacterAppearanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Hat1' => -1,
            'Hat2' => -1,
            'Hat3' => -1,
            'Head' => -1,
            'Face' => -1,
            'Pants' => -1,  
            'Shirts' => -1,
            'TShirts' => 25, //Rochao TShirt ID
        ];
    }
}
