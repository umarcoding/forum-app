<?php

namespace App\Livewire;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Auth\Middleware\Authenticate;
use Livewire\Component;

class AnswerForm extends Component
{
    public $body, $questionId;

    public function save()
    {
        $this->validate(['body' => 'required|string|min:5']);
        AnswerForm::create([
            'body' => $this->body,
            'question_id' => $this->questionId,
            'user_id' => $this->Auth::id(),
        ]);
        $this->body = '';
    }

}
