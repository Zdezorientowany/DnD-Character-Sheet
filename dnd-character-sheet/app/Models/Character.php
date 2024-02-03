<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sheet;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sheet_id',
        // 'equipment_id',
        // 'spellbook_id',
        // 'notes_id',
    ];


    public function sheet(): HasOne
    {
        return $this->hasOne(Sheet::class);
    }
}
