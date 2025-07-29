<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class QuestionForm extends Component
{
    public $title, $body, $questionId;

    protected $rules = [
        'title' => 'required|string|min:5',
        'body' => 'required|string|min:10',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $question = Question::findOrFail($id);
            $this->questionId = $question->id;
            $this->title = $question->title;
            $this->body = $question->body;
        }
    }

    public function save()
    {
        $this->validate();

        $question = Question::updateOrCreate(
            ['id' => $this->questionId],
            ['title' => $this->title, 'body' => $this->body, 'user_id' => Auth::id()]
        );

        return redirect()->route('questions.show', $question->id);
    }

    public function render()
    {
        return view('livewire.question-form');
    }
}
