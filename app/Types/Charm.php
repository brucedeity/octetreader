<?php

namespace App\Types;

use App\Contracts\Item;
use App\Contracts\Translate;

class Charm extends Translate implements Item
{
    public function getStructure(): array
    {
        return [
            'total' => 'int8',
            'trigger' => 'float',
        ];
    }

    public function getMinimumLength() : int
    {
        return 15;
    }
}
