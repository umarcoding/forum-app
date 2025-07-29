<!-- Formulir jawaban -->
<form wire:submit.prevent="save" class="space-y-2">
    <textarea wire:model="body" class="w-full border rounded px-3 py-2" rows="4"></textarea>
    <button class="bg-blue-600 text-white px-4 py-2 rounded">Jawab</button>
</form>
