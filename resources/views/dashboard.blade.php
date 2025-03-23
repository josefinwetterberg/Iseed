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
        <h1 id="dashboard-title">Welcome to Iseed</h1>
        <p>This is the admin area where you manage products.</p>

        <form action="{{ route('seeds.create') }}" method="GET" class="d-inline">
            <button type="submit" class="btn btn-primary" aria-label="Add New Seed">
                <span aria-hidden="true">+</span> Add New Seed
            </button>
        </form>

        <section class="filtering" aria-labelledby="filter-heading">
            <h2 id="filter-heading">Filter Products</h2>
            <form action="{{ route('dashboard') }}" method="GET" aria-labelledby="filter-heading">
                <div class="filter-row">
                    <!-- Name filter -->
                    <div class="filter-group">
                        <label for="filter_name" id="label_filter_name">Name:</label>
                        <input type="text" id="filter_name" name="name" value="{{ request('name') }}" aria-labelledby="label_filter_name">
                    </div>
                    
                    <!-- Category filter -->
                    <div class="filter-group">
                        <label for="filter_category" id="label_filter_category">Category:</label>
                        <select id="filter_category" name="category_id" aria-labelledby="label_filter_category">
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
                     <label for="filter_color" id="label_filter_color">Color:</label>
                    <select id="filter_color" name="color[]" multiple aria-labelledby="label_filter_color" aria-describedby="color_hint">
                        <option value="">All colors</option>
                            @foreach($colors as $color)
                                <option value="{{ $color }}" {{ in_array($color, $selectedColors) ? 'selected' : '' }}>
                                    {{ ucfirst($color) }}
                                </option>
                            @endforeach
                    </select>
                    <span id="color_hint" class="field-hint">Hold Ctrl or Cmd to select multiple colors</span>
                    </div>
                    
                    <!-- Annuality filter -->
                    <div class="filter-group">
                        <label for="filter_annuality" id="label_filter_annuality">Annuality:</label>
                        <select id="filter_annuality" name="annuality" aria-labelledby="label_filter_annuality">
                            <option value="">All Types</option>
                            <option value="annual" {{ request('annuality') == 'annual' ? 'selected' : '' }}>Annual</option>
                            <option value="perennial" {{ request('annuality') == 'perennial' ? 'selected' : '' }}>Perennial</option>
                            <option value="biennial" {{ request('annuality') == 'biennial' ? 'selected' : '' }}>Biennial</option>
                        </select>
                    </div>
                </div>
                
                <div class="filter-row">
                    <!-- Height range filter -->
                    <fieldset class="filter-group">
                        <legend>Height (cm):</legend>
                        <div class="range-inputs">
                            <label for="min_height" class="visually-hidden">Minimum height in cm</label>
                            <input type="number" id="min_height" name="min_height" placeholder="Min" 
                                   value="{{ request('min_height') }}" min="0" aria-label="Minimum height in centimeters">
                            <span aria-hidden="true">to</span>
                            <label for="max_height" class="visually-hidden">Maximum height in cm</label>
                            <input type="number" id="max_height" name="max_height" placeholder="Max" 
                                   value="{{ request('max_height') }}" min="0" aria-label="Maximum height in centimeters">
                        </div>
                    </fieldset>
                    
                    <!-- Price range filter -->
                    <fieldset class="filter-group">
                        <legend>Price (SEK):</legend>
                        <div class="range-inputs">
                            <label for="min_price" class="visually-hidden">Minimum price in SEK</label>
                            <input type="number" id="min_price" name="min_price" placeholder="Min" 
                                   value="{{ request('min_price') }}" min="0" step="0.01" aria-label="Minimum price in SEK">
                            <span aria-hidden="true">to</span>
                            <label for="max_price" class="visually-hidden">Maximum price in SEK</label>
                            <input type="number" id="max_price" name="max_price" placeholder="Max" 
                                   value="{{ request('max_price') }}" min="0" step="0.01" aria-label="Maximum price in SEK">
                        </div>
                    </fieldset>
                    
                    <!-- Organic filter -->
                    <div class="filter-group">
                        <label for="filter_organic" id="label_filter_organic">Organic:</label>
                        <select id="filter_organic" name="organic" aria-labelledby="label_filter_organic">
                            <option value="">All</option>
                            <option value="1" {{ request('organic') === '1' ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ request('organic') === '0' ? 'selected' : '' }}>No</option>
                        </select>
                    </div>

                    <!-- Seed count filter -->
                    <fieldset class="filter-group">
                        <legend>Seed Count:</legend>
                        <div class="range-inputs">
                            <label for="min_seed_count" class="visually-hidden">Minimum seed count</label>
                            <input type="number" id="min_seed_count" name="min_seed_count" placeholder="Min" 
                                   value="{{ request('min_seed_count') }}" min="0" aria-label="Minimum seed count">
                            <span aria-hidden="true">to</span>
                            <label for="max_seed_count" class="visually-hidden">Maximum seed count</label>
                            <input type="number" id="max_seed_count" name="max_seed_count" placeholder="Max" 
                                   value="{{ request('max_seed_count') }}" min="0" aria-label="Maximum seed count">
                        </div>
                    </fieldset>
                </div>
                
                <div class="filter-actions">
                    <button type="submit" class="filter-button">Apply Filters</button>
                    <a href="{{ route('dashboard') }}" class="reset-button" role="button">Reset Filters</a>
                </div>


            </form>

        </section>

        <section class="existing-products" aria-labelledby="products-heading">

            <h2 id="products-heading">Existing Products</h2>
            <table aria-labelledby="products-heading">
                <caption class="visually-hidden">List of seed products with their details</caption>
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
                        <td><img src="{{ $seed->image }}" alt="{{ "Photography of " . strtolower($seed->name) }}" width="50" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;"></td>
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
        </section>
    </x-slot>
</x-app-layout>