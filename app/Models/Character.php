<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    // Optional: Define fillable attributes to mass-assign data
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
