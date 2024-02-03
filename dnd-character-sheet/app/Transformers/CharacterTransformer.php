<?php

namespace App\Transformers;

use App\Models\Character;
use League\Fractal\TransformerAbstract;

class CharacterTransformer extends TransformerAbstract
{
    public function transform(Character $character)
    {
        return [
            'id' => $character->id,
            'name' => $character->name,
            'sheet' => $character->sheet,
        ];
    }
}
