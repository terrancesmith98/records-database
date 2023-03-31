    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                @if (session()->has('message'))
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                        role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ session('message') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <h1 class="text-xl text-green-800 text-bold">Record Collection</h1>
                <button wire:click="create()"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">New Artist</button>
                @if ($isOpen)
                    @include('livewire.create')
                @endif
                <div class="artists p-3 flex flex-row">
                    @foreach ($artists as $artist)
                        <div class="artist mx-8 border p-3 w-72 bg-slate-50" wire:key="artist{{ $artist->id }}">
                            <h3 class="text-xl text-red-800 font-bold inline">{{ $artist->name }}</h3>
                            <button wire:click="edit({{ $artist->id }})"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded ml-3">Edit</button>
                            <button wire:click="delete({{ $artist->id }})"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-1 rounded ml-3">Del</button>
                            <p>Genre: {{ $artist->genre }}</p>
                            <div class="releases">
                                @livewire('releases', ['artist' => $artist], key($artist->id))
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
