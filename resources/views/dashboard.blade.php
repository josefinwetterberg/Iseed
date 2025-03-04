<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <body>
        @include('errors')
        <h1>Welcome to the Dashboard</h1>
        <p>This is the admin area where you manage products.</p>

        <h2>Add new products</h2>
        <form action="/seeds" method="POST">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="description">Description</label>
                <input type="text" name="description" id="description">
            </div>
            <div>
                <label for="annuality">Annuality</label>
                <input type="text" name="annuality" id="annuality">
            </div>
            <div>
                <label for="height_cm">Height in centimeters</label>
                <input type="number" name="height_cm" id="height_cm">
            </div>
            <div>
                <label for="color">Color</label>
                <input type="text" name="color" id="color">
            </div>
            <div>
                <label for="image">Image</label>
                <input type="url" name="image" id="image">
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" name="price" id="price">
            </div>
            <div>
                <label for="seed_count">How many seeds in packet</label>
                <input type="number" name="seed_count" id="seed_count">
            </div>
            <div>
                <label for="ecological">Ecological</label>
                <select name="ecological" id="ecological">
                    <option value="true">Yes</option>
                    <option value="false">No</option>
                </select>
            </div>
            <button type="submit">Add new product</button>
        </form>

        {{-- Task form (commented out) --}}
        {{-- <h2>Create a task</h2>
        <form method="post" action="/tasks">
            @csrf
            <div>
                <label for="description">Description</label>
                <input name="description" id="description" type="text" />
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Create task</button>
        </form> --}}

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </body>
</x-app-layout>