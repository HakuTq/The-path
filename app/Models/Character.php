<?php

namespace App\Models;

use App\Enums\AlignmentEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'gold',
        'alignment',
        'race',
        'ability_scores',
        'feats',
        'skills',
    ];

    protected $casts = [
        'ability_scores' => 'array',
        'feats' => 'array',
        'skills' => 'array',
        'alignment' => AlignmentEnum::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function characterClasses()
    {
        return $this->hasMany(CharacterClass::class);
    }
}
