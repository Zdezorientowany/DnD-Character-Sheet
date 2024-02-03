<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Character;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'character_id',
        'character_name',
        'level',
        'class',
        'subclass',
        'race',
        'background',
        'spelcasting_ability',
        'inspiration dice',
        'proficiency_bonus',
        // 'statistic_id',
    ];

    public function character(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }

}
