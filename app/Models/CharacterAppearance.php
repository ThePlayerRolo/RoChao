<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterAppearance extends Model
{
    /** @use HasFactory<\Database\Factories\CharacterAppearanceFactory> */
    protected $fillable = ['Hat1', 'Hat2', 'Hat3', 'Head', 'Face', 'Pants', 'Shirts', 'TShirts'];

    use HasFactory;
}
