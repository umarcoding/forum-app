<?php

// app/Http/Livewire/QuestionList.php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Question;

class QuestionList extends Component
{
    public function render()
    {
        return view('livewire.question-list', [
            'questions' => Question::latest()->get()
        ]);
    }
}
