<?php

namespace App\Models\Poll;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Poll\MasterQuestion;

class TypesPoll extends Model
{
    use HasFactory;

    const RELATION_SHIPS = ['questions'];

    public function questions()
    {
        return $this->HasMany(MasterQuestion::class, 'type_poll_id');
    }
}
