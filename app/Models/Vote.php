<?php

class Vote extends Model
{
    protected $fillable = ['user_id', 'votable_type', 'votable_id', 'value'];

    public function votable()
    {
        return $this->morphTo();
    }
}
