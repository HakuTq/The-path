<?php

namespace App\Models;

use App\Enums\AlignmentEnum;
use App\Enums\HealthTypesEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    #region Traits
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'gold', 'alignment', 'race', 'ability_scores', 'feats', 'skills',];
    protected $casts = [
        'name' => 'string',
        'health_type' => HealthTypesEnum::class,
        'gold' => 'float',
        'alignment' => AlignmentEnum::class,
        'race' => 'string',
        'ability_scores' => 'array',
        'feats' => 'array',
        'skill_ranks' => 'array',
    ];
    #endregion
    #region Properties
    public function abilityScore($ability): ?int
    {
        return $this->ability_scores[$ability] ?? null;
    }
    public function abilityModifier($ability): ?int
    {
        $score = $this->abilityScore($ability);
        if ($score === null) return null;
        return floor(($score - 10) / 2);
    }
    public function feats(): array
    {
        return $this->feats;
    }
    public function skills(): array
    {
        return $this->skills;
    }
    public function alignment(): AlignmentEnum
    {
        return $this->alignment;
    }

    public function level(): int
    {
        $level = 0;
        foreach ($this->characterClasses as $class) {
            $level += $class->level;
        }
        return $level;
    }

    public function classes(): array
    {
        $classes = [];
        foreach ($this->characterClasses as $class) {
            $classes[] = $class->name;
        }
        return $classes;
    }
    #endregion
    #region Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function characterClasses()
    {
        return $this->hasMany(CharacterClass::class)
            ->orderBy('level', 'desc')
            ->with('classFeatures');
    }
    #endregion
}
