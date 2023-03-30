<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Record Collection') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-5 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-lg text-red-600">Artists</h1>
                <div class="artists flex flex-row p-5">
                    @foreach ($artists as $artist)
                        <div class="artist p-3 border mx-2 w-80 sm:rounded-lg">
                            <a href="{{ route('artists.edit', $artist->id) }}">
                                <h3 class="text-red-600 text-bold">{{ $artist->name }}</h3>
                            </a>
                            <p>Genre: {{ $artist->genre }}</p>
                            <h4 class="mt-5">Releases</h4>
                            <div class="releases p-2">
                                @if ($artist->releases->count() < 1)
                                    <p>No releases in collection.</p>
                                @else
                                    @foreach ($artist->releases as $release)
                                        <div class="release py-3 mb-2 w-80">
                                            <h5>{{ $release->title }}</h5>
                                            <p>Released: {{ $release->releaseYear }}</p>
                                        </div>
                                    @endforeach
                                @endif

                            </div>


                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
