<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function votes()
    {
        return $this->morphMany(Vote::class, 'votable');
    }

    public function getScoreAttribute()
    {
        return $this->votes()->sum('value');
}

}
