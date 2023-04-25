<?php

namespace App\Repositories\Poll;

use App\Models\Poll\Poll;
use App\Models\Poll\TypesPoll;
use App\Models\Poll\MasterQuestion;

class PollRepository
{
    public static function create($data)
    {
        return Poll::create($data);
    }

    public static function getAll()
    {
        return Poll::with(Poll::RELATION_SHIPS)->get();
    }

    public static function getByID($id)
    {
        return Poll::with(Poll::RELATION_SHIPS)->find($id);
    }

    public static function getTypePollByWhere($where)
    {
        return TypesPoll::with(TypesPoll::RELATION_SHIPS)->where($where)->first();
    }

    public static function getOneQuestionByWhere($where)
    {
        return MasterQuestion::with(MasterQuestion::RELATION_SHIPS)->where($where)->first();
    }

    public static function getQuestionsByWhere($where)
    {
        return MasterQuestion::with(MasterQuestion::RELATION_SHIPS)->where($where)->get();
    }

    public static function update(Poll $model, $data)
    {
        return $model->update($data);
    }
    
    public static function delete(Poll $model)
    {
        return $model->delete();
    }
}
