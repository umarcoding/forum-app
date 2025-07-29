<div class="flex items-center gap-2">
    <button wire:click="upvote" class="{{ $vote == 1 ? 'text-green-600' : '' }}">👍</button>
    <span>{{ $score }}</span>
    <button wire:click="downvote" class="{{ $vote == -1 ? 'text-red-600' : '' }}">👎</button>
</div>
