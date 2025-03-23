<x-app-layout>
    <x-slot name="header">
        <div class="dashboard-header">
            <h1>Edit Seed: {{ $seed->name }}</h1>
            <p>Update your seed product details below</p>
        </div>
    </x-slot>

    <div class="main-content">
        <section class="filtering">
            @include('errors')
            <form action="{{ route('seeds.update', $seed->id) }}" method="POST">
                @csrf
                @method('PUT')
                <x-form :seed="$seed" :categories="$categories" />
            </form>
        </section>
    </div>
</x-app-layout>