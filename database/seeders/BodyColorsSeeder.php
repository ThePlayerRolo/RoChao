<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BodyColors;

class BodyColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BodyColors::Create(['HeadColor' => 24, 'LeftArmColor' => 24, 'LeftLegColor' => 21, 'RightArmColor' => 24, 'RightLegColor' => 21, 'TorsoColor' =>  26]);
    }
}
