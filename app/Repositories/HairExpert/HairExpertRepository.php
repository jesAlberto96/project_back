<?php

namespace App\Repositories\HairExpert;

use App\Models\HairExpert\HairExpert;

class HairExpertRepository
{
    public static function getAll()
    {
        return HairExpert::all();
    }
}
