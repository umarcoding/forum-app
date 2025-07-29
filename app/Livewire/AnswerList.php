<?php

namespace App\Livewire;

use Livewire\Component;

class AnswerList extends Component
{
    public $questionId;

    public function render()
    {
        $answers = AnswerList::where('question_id', $this->questionId)->latest()->get();
        return view('livewire.answer-list', compact('answers'));
    }

}
