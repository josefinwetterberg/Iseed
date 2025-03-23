@props(['seed' => null, 'categories' => []])

@csrf
<div class="filter-row">
    <div class="filter-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $seed?->name) }}"
            required aria-required="true" class="filter-group input">
    </div>
    <div class="filter-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{ old('description', $seed?->description) }}" class="filter-group input">
    </div>
    <div class="filter-group">
        <label for="annuality">Annuality</label>
        <select name="annuality" id="annuality" class="filter-group select">
            <option value="annual" {{ old('annuality', $seed?->annuality) == 'annual' ? 'selected' : '' }}>Annual</option>
            <option value="perennial" {{ old('annuality', $seed?->annuality) == 'perennial' ? 'selected' : '' }}>Perennial</option>
            <option value="biennial" {{ old('annuality', $seed?->annuality) == 'biennial' ? 'selected' : '' }}>Biennial</option>
        </select>
    </div>
</div>

<div class="filter-row">
    <div class="filter-group">
        <label for="height_cm">Height in centimeters</label>
        <input type="number" name="height_cm" id="height_cm" value="{{ old('height_cm', $seed?->height_cm) }}" class="filter-group input">
    </div>
    <div class="filter-group">
        <label for="color">Color</label>
        <input type="text" name="color" id="color" value="{{ old('color', $seed?->color) }}" class="filter-group input">
    </div>
    <div class="filter-group">
        <label for="image">Image</label>
        <input type="url" name="image" id="image" value="{{ old('image', $seed?->image) }}" class="filter-group input">
    </div>
</div>

<div class="filter-row">
    <div class="filter-group">
        <label for="price_sek">Price</label>
        <input type="number" name="price_sek" id="price_sek" value="{{ old('price_sek', $seed?->price_sek) }}" class="filter-group input">
    </div>
    <div class="filter-group">
        <label for="seed_count">How many seeds in packet</label>
        <input type="number" name="seed_count" id="seed_count" value="{{ old('seed_count', $seed?->seed_count) }}" class="filter-group input">
    </div>
    <div class="filter-group">
        <label for="organic">Organic</label>
        <select name="organic" id="organic" class="filter-group select">
            <option value="1" {{ old('organic', $seed?->organic) == 1 ? 'selected' : ''  }}>Yes</option>
            <option value="0" {{ old('organic', $seed?->organic) == 0 ? 'selected' : '' }}>No</option>
        </select>
    </div>
</div>

<div class="filter-row">
    <div class="filter-group">
        <label for="categories">Category</label>
        <select name="categories[]" id="categories" multiple class="filter-group select">
            @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{ in_array($category->id, old('categories', $seed?->categories->pluck('id')->toArray() ?? [])) ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>
</div>

<div class="filter-actions">
    <button type="submit" class="filter-button">Save</button>
    <a href="{{ route('dashboard') }}" class="reset-button">Cancel</a>
</div>