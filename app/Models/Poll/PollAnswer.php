<?php

namespace App\Models\Poll;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'poll_id',
        'question_id',
        'type_poll_id',
        'hair_expert_id',
        'response',
    ];
}
