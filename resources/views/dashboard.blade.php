<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-5 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="" class="p-3 w-32 bg-red-600 text-white sm:rounded-lg">View By Artists</a>
                <a href="" class="p-3 w-32 bg-green-700 text-white sm:rounded-lg ml-2">New Artist</a>
                <a href="" class="p-3 w-32 bg-green-700 text-white sm:rounded-lg ml-2">New Release</a>
            </div>
        </div>
    </div>
</x-app-layout>
