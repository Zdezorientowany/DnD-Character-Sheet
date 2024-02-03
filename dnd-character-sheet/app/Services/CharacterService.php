<?php

namespace App\Services;

use App\Models\Character;
use App\Trnasformers\CharacterTransformer;

class CharacterService
{
    public function __construct(protected Character $model){}

    public function index(): array
    {
        $characters = $this->model->all();

        return fractal()
            ->collection($characters)
            ->transformWith(new CharacterTransformer)
            ->toArray()['data'];
    }
}
