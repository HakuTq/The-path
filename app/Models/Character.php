<?php

namespace App\Models;

use App\Enums\AlignmentEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    #region Traits
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'gold', 'alignment', 'race', 'ability_scores', 'feats', 'skills',];
    protected $casts = [
        'ability_scores' => 'array',
        'feats' => 'array',
        'skills' => 'array',
        'alignment' => AlignmentEnum::class,
    ];
    #endregion
    #region Properties
    public function getAbilityScore($ability):?int
    {
        return $this->ability_scores[$ability] ?? null;
    }
    public function getAbbilityModifier($ability):?int
    {
        $score = $this->getAbilityScore($ability);
        if ($score === null) return null;
        return floor(($score - 10) / 2);
    }

    public function getFeats():array
    {
        return $this->feats;
    }
    public function getSkills():array
    {
        return $this->skills;
    }
    public function getAlignment(): AlignmentEnum
    {
        return $this->alignment;
    }
    #endregion
    #region Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function characterClasses()
    {
        return $this->hasMany(CharacterClass::class);
    }
    #endregion
}
