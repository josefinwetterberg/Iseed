<x-app-layout>
    <x-slot name="header">
        <div class="dashboard-header">
            <h1>{{ __('Add a New Seed') }}</h1>
            <p>Add your new seed product details below</p>
        </div>
    </x-slot>

    <div class="main-content">
        <section class="filtering">
            @include('errors')
            <form action="{{ route('seeds.store') }}" method="POST">
                <x-form :categories="$categories" />
            </form>
        </section>
    </div>
</x-app-layout>