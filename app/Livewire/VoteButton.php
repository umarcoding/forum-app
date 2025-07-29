<?php

namespace App\Livewire;

use Livewire\Component;

class VoteButton extends Component
{
    public $model;
    public $vote;

    public function mount($model)
    {
        $this->model = $model;
        $this->vote = $model->votes()->where('user_id', auth()->id())->first()?->value;
    }

    public function upvote()
    {
        $this->vote(+1);
    }

    public function downvote()
    {
        $this->vote(-1);
    }

    protected function vote($value)
    {
        $this->model->votes()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['value' => $value]
        );
        $this->vote = $value;
    }

    public function render()
    {
        return view('livewire.vote-button', [
            'score' => $this->model->score,
        ]);
    }
}

