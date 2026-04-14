<?php

namespace App\Models;

use App\Enums\AlignmentEnum;
use App\Enums\HealthTypesEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Livewire\WithPagination;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property HealthTypesEnum $health_type
 * @property numeric $gold
 * @property AlignmentEnum $alignment
 * @property string $race
 * @property array<array-key, mixed> $ability_scores
 * @property string $feats
 * @property array<array-key, mixed> $skill_ranks
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CharacterClass> $characterClass
 * @property-read int|null $character_class_count
 * @property-read mixed $level
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\CharacterFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character whereAbilityScores($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character whereAlignment($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character whereFeats($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character whereGold($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character whereHealthType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character whereRace($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character whereSkillRanks($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Character whereUserId($value)
 * @mixin \Eloquent
 */
class Character extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    use HasFactory;
    use WithPagination;

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'gold',
        'alignment',
        'race',
        'ability_scores',
        'skill_ranks'
    ];
    protected $casts = [
        'ability_scores' => 'array',
        'skill_ranks' => 'array',
        'alignment' => AlignmentEnum::class,
        'health_type' => HealthTypesEnum::class,
    ];

    protected function level(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->characterLevels()->sum('class_level'),
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function characterClass()
    {
        return $this->hasMany(CharacterClass::class);
    }
}
