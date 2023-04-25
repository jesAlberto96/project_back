<?php

namespace App\Models\HairExpert;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HairExpert extends Model
{
    use HasFactory;

    protected $appends = ['text', 'value'];

    public function getTextAttribute()
    {
        return "{$this->name} {$this->surname}";
    }
    
    public function getValueAttribute()
    {
        return $this->id;
    }
}
