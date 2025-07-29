<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\QuestionList;
use App\Livewire\QuestionDetail;
use App\Livewire\QuestionForm;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/questions', QuestionList::class)->name('questions.list');
Route::get('/questions/{id}', QuestionDetail::class)->name('questions.show');
Route::get('/questions/create', QuestionForm::class)->name('questions.create');
Route::get('/questions/edit/{id}', QuestionForm::class)->name('questions.edit');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
