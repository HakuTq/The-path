<?php

namespace App\Models;

use App\Enums\ClassEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterClass extends Model
{
    use HasFactory;

    protected $table = 'character_class';

    protected $casts = [
        'base_health' => 'array',
        'name' => ClassEnum::class,
        'level' => 'integer',
    ];

    protected $fillable = ['character_id', 'name', 'level', 'hit_die', 'racial_traits', 'class_features'];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
