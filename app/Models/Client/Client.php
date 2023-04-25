<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'second_name',
        'surname',
        'second_surname',
        'email',
        'birth_date',
        'number_phone',
    ];
}
