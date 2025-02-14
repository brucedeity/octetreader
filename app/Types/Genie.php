<?php

namespace App\Types;

use App\Contracts\Item;
use App\Contracts\Translate;

class Genie extends Translate implements Item
{
    public function getStructure(): array
    {
        return [
            'current_exp' => 'int64',
            'level' => 'int32',
            'available_points' => 'int32',
            'strength' => 'int32',
            'agility' => 'int32',
            'constitution' => 'int32',
            'intelligence' => 'int32',
            'talent_points' => 'int32',
            'metal' => 'int32',
            'wood' => 'int32',
            'water' => 'int32',
            'fire' => 'int32',
            'earth' => 'int32',
            'refine_level' => 'int32',
            'vigour' => 'int64',
            'status_value' => 'int64',
            'equipments_count' => 'int64',
            'skills_count' => 'skills_count',
            // 'skills' => 'skills', TODO
        ];
    }

    public function getMinimumLength() : int
    {
        return 83;
    }
}
