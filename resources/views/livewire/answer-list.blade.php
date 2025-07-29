<!-- List jawaban -->
<div class="space-y-2">
    @foreach ($answers as $answer)
        <div class="border p-3 rounded bg-gray-50">
            <p>{{ $answer->body }}</p>
            <small class="text-gray-500">oleh {{ $answer->user->name }}</small>
        </div>
        @livewire('vote-button', ['model' => $question], key('q-'.$question->id))
        @livewire('vote-button', ['model' => $answer], key('a-'.$answer->id))

    @endforeach
</div>
