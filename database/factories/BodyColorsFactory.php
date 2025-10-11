<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BodyColors>
 */
class BodyColorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'HeadColor' => 24,
            'LeftArmColor' => 24,
            'LeftLegColor' => 119,
            'RightArmColor' => 24,
            'RightLegColor' => 119,
            'TorsoColor' =>  23,
        ];
    }
}
