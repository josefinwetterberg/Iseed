<x-app-layout>
    <x-slot name="header">
        <x-header title="Dashboard" />
    </x-slot>

    <x-slot name="slot">

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @include('errors')
        <h1>Welcome to the Dashboard</h1>
        <p>This is the admin area where you manage products.</p>

        <form action="{{ route('seeds.create') }}" method="GET" class="d-inline">
            <button type="submit" class="btn btn-primary">Add New Seed</button>
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
                    <th>Category</th>
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
                    <td>{{ $seed->categories->pluck('name')->join(', ') }}</td>
                    <td><a href="{{ route('seeds.edit', $seed->id) }}">Edit</a> {{-- Add Edit Button --}}</td>
                    <td>
                        <form action="{{ route('seeds.destroy', $seed) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-app-layout>