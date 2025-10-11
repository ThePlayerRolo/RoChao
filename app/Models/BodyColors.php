<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyColors extends Model
{
    /** @use HasFactory<\Database\Factories\BodyColorsFactory> */
    protected $fillable = ['HeadColor', 'LeftArmColor', 'LeftLegColor', 'RightArmColor', 'RightLegColor', 'TorsoColor'];
    
    use HasFactory;
}
