<?php

namespace App\Models\Poll;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class MasterQuestion extends Model
{
    use HasFactory;

    const RELATION_SHIPS = [];

    protected $appends = ['values_format'];

    public function getValuesFormatAttribute()
    {
        return json_decode($this->values) ?? [];
    }
}
