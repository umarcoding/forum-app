<!-- resources/views/livewire/question-form.blade.php -->
<div class="p-4 max-w-2xl mx-auto">
    <form wire:submit.prevent="save" class="space-y-4">
        <div>
            <label class="block font-semibold">Judul Pertanyaan</label>
            <input wire:model="title" type="text" class="w-full border rounded px-3 py-2">
            @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block font-semibold">Isi Pertanyaan</label>
            <textarea wire:model="body" class="w-full border rounded px-3 py-2" rows="6"></textarea>
            @error('body') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
            {{ $questionId ? 'Update' : 'Kirim' }}
        </button>
    </form>
</div>
