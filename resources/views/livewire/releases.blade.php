<div class="">
    <div class="bg-slate-50 overflow-hidden py-4">
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
        <h3 class="text-lg text-green-800 font-bold">Releases</h3>
        {{-- <button wire:click="create()"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded my-1">New Release</button> --}}
        @if ($isOpen)
            @include('livewire.releases.create', ['artist_id' => $artist_id])
        @endif
        <div class="releases">
            @foreach ($releases as $release)
                @if (count($releases) > 0)
                    <div class="release py-3" wire:key="release{{ $release->id }}">
                        <h3>{{ $release->title }}</h3>
                        <p>Released: {{ $release->releaseYear }}</p>
                    </div>
                @else
                    <p>No releases in collection.</p>
                @endif
            @endforeach
        </div>
    </div>
</div>
