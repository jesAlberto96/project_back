<?php

namespace App\Repositories\Poll;

use App\Models\Poll\PollAnswer;

class PollAnswerRepository
{
    public static function create($data)
    {
        return PollAnswer::create($data);
    }

    public static function getAll()
    {
        return PollAnswer::with(PollAnswer::RELATION_SHIPS)->get();
    }
}
