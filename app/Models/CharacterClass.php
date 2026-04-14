<?php

namespace App\Models;

use App\Enums\ClassEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $character_id
 * @property string $name
 * @property int $level
 * @property array<array-key, mixed> $base_health
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Character $character
 * @method static \Database\Factories\CharacterClassFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharacterClass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharacterClass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharacterClass query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharacterClass whereBaseHealth($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharacterClass whereCharacterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharacterClass whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharacterClass whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharacterClass whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharacterClass whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharacterClass whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CharacterClass extends Model
{
    use HasFactory;

    protected $table = 'character_class';

    protected $casts = [
        'base_health' => 'array',
        'name' => 'string',
        'level' => 'integer',
    ];
    protected $fillable = [
        'character_id',
        'name',
        'level',
        'hit_die',
        'racial_traits',
        'class_features'
    ];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
