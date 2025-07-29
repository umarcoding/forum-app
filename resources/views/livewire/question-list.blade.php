<!-- resources/views/livewire/question-list.blade.php -->
<div class="space-y-4 p-4">
    <a href="{{ route('questions.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Ajukan Pertanyaan</a>

    @foreach ($questions as $question)
        <div class="border p-4 rounded shadow">
            <a href="{{ route('questions.show', $question->id) }}" class="text-xl font-semibold text-blue-600">
                {{ $question->title }}
            </a>
            <p class="text-sm text-gray-600">oleh {{ $question->user->name }} | {{ $question->created_at->diffForHumans() }}</p>
        </div>
        @livewire('vote-button', ['model' => $question], key('q-'.$question->id))
        @livewire('vote-button', ['model' => $answer], key('a-'.$answer->id))

    @endforeach

</div>
