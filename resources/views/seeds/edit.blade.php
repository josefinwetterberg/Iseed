<x-app-layout>
    <x-slot name="header">
        <h1>Edit Seed</h1>
        {{-- Add link to go back to dashboard --}}
        <a href="{{ route('dashboard') }}" class="underline">Back to dashboard</a>
    </x-slot>

    <div class="edit-container">
        <form action="{{ route('seeds.update', $seed->id) }}" method="POST">

            @csrf
            @method('PUT')
            <x-form :seed="$seed" :categories="$categories" />
        </form>
    </div>
</x-app-layout>