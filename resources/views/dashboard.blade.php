<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- Display logged in user -->
            Hello <b>{{ Auth::user() -> name }}</b>
        </h2>
    </x-slot>

    <div class="py-12">
        
    </div>
</x-app-layout>
