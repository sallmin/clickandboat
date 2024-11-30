<div>
    <form wire:submit.prevent="save">
        {{ $this->form }}
        <button type="submit" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 w-full mt-2">Save Boat text</button>
    </form>
    @if (session()->has('success'))
        <div class="text-white">
            {{ session('success') }}
        </div>
    @endif
</div>
