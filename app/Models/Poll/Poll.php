<?php

namespace App\Models\Poll;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    const RELATION_SHIPS = [];

    protected $fillable = [
        'client_id',
        'hair_expert_id',
        'type_poll_id',
    ];
}
