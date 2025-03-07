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
                        <label for="price_sek">Price</label>
                        <input type="number" name="price_sek" id="price_sek">
                    </div>
                    <div>
                        <label for="seed_count">How many seeds in packet</label>
                        <input type="number" name="seed_count" id="seed_count">
                    </div>
                    <div>
                        <label for="organic">Organic</label>
                        <select name="organic" id="organic">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                <button type="submit">Add new product</button>
            </form>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>

        <h2>Existing Products</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Annuality</th>
                    <th>Height (cm)</th>
                    <th>Color</th>
                    <th>Image</th>
                    <th>Price (SEK)</th>
                    <th>Seed Count</th>
                    <th>Organic</th>
                </tr>
            </thead>
            <tbody>
                @foreach($seeds as $seed)
                <tr>
                    <td>{{ $seed->name }}</td>
                    <td>{{ $seed->description }}</td>
                    <td>{{ $seed->annuality }}</td>
                    <td>{{ $seed->height_cm }}</td>
                    <td>{{ $seed->color }}</td>
                    <td><img src="{{ $seed->image }}" alt="{{ $seed->name }}" width="50"></td>
                    <td>{{ $seed->price_sek }}</td>
                    <td>{{ $seed->seed_count }}</td>
                    <td>{{ $seed->organic ? 'Yes' : 'No' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</x-app-layout>