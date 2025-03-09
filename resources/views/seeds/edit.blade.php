<x-app-layout>
    <x-slot name="header">
        <h2>Edit Seed</h2>
    </x-slot>

    <div class="edit-container">
        <form action="{{ route('seeds.update', $seed->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $seed->name) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" required>{{ old('description', $seed->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="annuality">Annuality:</label>
                <input type="text" name="annuality" id="annuality" value="{{ old('annuality', $seed->annuality) }}" required>
            </div>

            <div class="form-group">
                <label for="height_cm">Height (cm):</label>
                <input type="number" name="height_cm" id="height_cm" value="{{ old('height_cm', $seed->height_cm) }}" required>
            </div>

            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" name="color" id="color" value="{{ old('color', $seed->color) }}" required>
            </div>

            <div class="form-group">
                <label for="image">Image URL:</label>
                <input type="url" name="image" id="image" value="{{ old('image', $seed->image) }}" required>
            </div>

            <div class="form-group">
                <label for="price_sek">Price (SEK):</label>
                <input type="number" name="price_sek" id="price_sek" value="{{ old('price_sek', $seed->price_sek) }}" required>
            </div>

            <div class="form-group">
                <label for="seed_count">Seed Count:</label>
                <input type="number" name="seed_count" id="seed_count" value="{{ old('seed_count', $seed->seed_count) }}" required>
            </div>

            <div class="form-group">
                <label for="organic">Organic:</label>
                <select name="organic" id="organic" required>
                    <option value="1" {{ $seed->organic ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$seed->organic ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <div class="button-group">
                <button type="submit">Update Seed</button>
                <a href="{{ route('dashboard') }}" class="cancel-button">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>