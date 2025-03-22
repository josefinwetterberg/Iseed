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

        <section class="filtering">
            <h2>Filter Products</h2>
            <form action="{{ route('dashboard') }}" method="GET">
                <div class="filter-row">
                    <!-- Name filter -->
                    <div class="filter-group">
                        <label for="filter_name">Name:</label>
                        <input type="text" id="filter_name" name="name" value="{{ request('name') }}">
                    </div>
                    
                    <!-- Category filter -->
                    <div class="filter-group">
                        <label for="filter_category">Category:</label>
                        <select id="filter_category" name="category_id">
                            <option value="">All categories</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Color filter -->
                    <div class="filter-group">
                        @php
                            $selectedColors = (array) request('color'); // Ensures it's an array
                        @endphp
                     <label for="filter_category">Color:</label>
                    <select id="filter_color" name="color[]" multiple>
                        <option value="">All colors</option>
                            @foreach($colors as $color)
                                <option value="{{ $color }}" {{ in_array($color, $selectedColors) ? 'selected' : '' }}>
                                    {{ ucfirst($color) }}
                                </option>
                            @endforeach
                    </select>
                    </div>
                    
                    <!-- Annuality filter -->
                    <div class="filter-group">
                        <label for="filter_annuality">Annuality:</label>
                        <select id="filter_annuality" name="annuality">
                            <option value="">All Types</option>
                            <option value="annual" {{ request('annuality') == 'annual' ? 'selected' : '' }}>Annual</option>
                            <option value="perennial" {{ request('annuality') == 'perennial' ? 'selected' : '' }}>Perennial</option>
                            <option value="biennial" {{ request('annuality') == 'biennial' ? 'selected' : '' }}>Biennial</option>
                        </select>
                    </div>
                </div>
                
                <div class="filter-row">
                    <!-- Height range filter -->
                    <div class="filter-group">
                        <label for="min_height">Height (cm):</label>
                        <input type="number" id="min_height" name="min_height" placeholder="Min" value="{{ request('min_height') }}">
                        <span>to</span>
                        <input type="number" id="max_height" name="max_height" placeholder="Max" value="{{ request('max_height') }}">
                    </div>
                    
                    <!-- Price range filter -->
                    <div class="filter-group">
                        <label for="min_price">Price (SEK):</label>
                        <input type="number" id="min_price" name="min_price" placeholder="Min" value="{{ request('min_price') }}">
                        <span>to</span>
                        <input type="number" id="max_price" name="max_price" placeholder="Max" value="{{ request('max_price') }}">
                    </div>
                    
                    <!-- Organic filter -->
                    <div class="filter-group">
                        <label for="filter_organic">Organic:</label>
                        <select id="filter_organic" name="organic">
                            <option value="">All</option>
                            <option value="1" {{ request('organic') === '1' ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ request('organic') === '0' ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <!-- Seed count filter -->
                    <div class="filter-group">
                        <label for="min_seed_count">Seed Count:</label>
                        <input type="number" id="min_seed_count" name="min_seed_count" placeholder="Min" value="{{ request('min_seed_count') }}">
                        <span>to</span>
                        <input type="number" id="max_seed_count" name="max_seed_count" placeholder="Max" value="{{ request('max_seed_count') }}">
                    </div>
                </div>
                
                <div class="filter-actions">
                    <button type="submit" class="filter-button">Apply Filters</button>
                    <a href="{{ route('dashboard') }}" class="reset-button">Reset Filters</a>
                </div>


            </form>

        </section>

        <h2>Existing Products</h2>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Annuality</th>
                    <th>Height (cm)</th>
                    <th>Color</th>
                    <th>Price (SEK)</th>
                    <th>Seed Count</th>
                    <th>Organic</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach($seeds as $seed)
                <tr>
                    <td><img src="{{ $seed->image }}" alt="{{ $seed->name }}" width="50" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;"></td>
                    <td>{{ $seed->name }}</td>
                    <td>{{ $seed->description }}</td>
                    <td>{{ $seed->annuality }}</td>
                    <td>{{ $seed->height_cm }}</td>
                    <td>{{ $seed->color }}</td>
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