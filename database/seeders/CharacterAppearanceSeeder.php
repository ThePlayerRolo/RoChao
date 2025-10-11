<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CharacterAppearance;

class CharacterAppearanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CharacterAppearance::Create(['Hat1' => 1, 'Hat2' => 6, 'Hat3' => 8, 'Head' => -1, 'Face' => 11, 'Pants' =>  -1, 'Shirts' => -1, 'TShirts' => 13]);
    }
}
