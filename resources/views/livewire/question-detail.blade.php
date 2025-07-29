<!-- resources/views/livewire/question-detail.blade.php -->
<div class="p-4 max-w-3xl mx-auto space-y-4">
    <div class="border p-4 rounded">
        <h1 class="text-2xl font-bold">{{ $question->title }}</h1>
        <p class="text-sm text-gray-600 mb-2">oleh {{ $question->user->name }}</p>
        <div class="text-gray-800">{{ $question->body }}</div>
    </div>

    @livewire('answer-form', ['questionId' => $question->id])
    @livewire('answer-list', ['questionId' => $question->id])
</div>
