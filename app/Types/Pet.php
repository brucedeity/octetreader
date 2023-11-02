<?php

namespace App\Types;

use App\Contracts\Item;
use App\Contracts\Translate;

class Pet extends Translate implements Item
{
    public function getStructure(): array
    {
        return [
            'level_requirement' => 'int8',
            'required_class' => 'int8',
            'loyalty' => 'int8',
            'pet_id' => 'int8',
            'pet_vis_tid' => 'int8',
            'egg_id' => 'int8',
            'pet_type' => 'int8',
            'pet_level' => 'int',
            'color' => 'int',
            'current_exp' => 'int8',
            'skill_points' => 'int8',
            'name_length' => 'name_length',
            'name' => 'pack_name',
            'skills_count' => 'skills_count',
            'skills' => 'skills',
        ];
    }

    public function getMinimumLength() : int
    {
        return 119;
    }
}
