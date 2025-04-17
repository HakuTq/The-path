<?php

namespace App\Models;

use App\Enums\ClassEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterClass extends Model
{
    #region Basic Model stuff
    use HasFactory;
    protected $table = 'character_class';
    protected $casts = [
        'base_health' => 'array',
        'name' => 'string',
        'level' => 'integer',
    ];
    protected $fillable = ['character_id', 'name', 'level', 'hit_die', 'racial_traits', 'class_features'];
    #endregion
    #region Properties
    public function baseHealth(): array
    {
        return $this->base_health;
    }
    public function name(): ClassEnum
    {
        return ClassEnum::from($this->name);
    }
    public function level(): int
    {
        return $this->level;
    }
    #endregion
    #region Methods
    public function classInformation(): array
    {
        return $this->name()->classInformation();
    }
    public function classFeaturesArray(): array
    {
        # Needs checking for right syntax      
        $classFeatures = $this->name()->classFeatures(); #->where('level', '<=', $this->level);
        return $classFeatures;
    }
    #endregion
    #region Relationships
    public function character()
    {
        return $this->belongsTo(Character::class);
    }
    #endregion
}
