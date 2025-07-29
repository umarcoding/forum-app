<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Question;

class QuestionDetail extends Component
{
    public $question;

    public function mount($id)
    {
        $this->question = Question::with('user', 'answers.user')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.question-detail');
    }

    public function markAsBest($answerId)
    {
        $question = $this->question;

        if (auth()->id() !== $question->user_id) return;

        $question->update(['best_answer_id' => $answerId]);
    }

}

