<x-app-layout>
    <x-slot name="header">
        <h2>Edit Seed</h2>
    </x-slot>

    <div class="edit-container">
        <form action="{{ route('seeds.update', $seed->id) }}" method="POST">

            @csrf
            @method('PUT')
            <x-form :seed="$seed" />

        </form>
    </div>
</x-app-layout>