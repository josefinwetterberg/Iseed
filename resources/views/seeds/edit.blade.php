@extends('layouts.app')

@section('content')
    <h1>Edit Seed</h1>

    <form action="{{ route('seeds.update', $seed->id) }}" method="POST">
        @csrf
        @method('PUT') 

        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $seed->name) }}" required>

        <label>Description:</label>
        <textarea name="description" required>{{ old('description', $seed->description) }}</textarea>

        <label>Annuality:</label>
        <input type="text" name="annuality" value="{{ old('annuality', $seed->annuality) }}" required>

        <label>Height (cm):</label>
        <input type="number" name="height_cm" value="{{ old('height_cm', $seed->height_cm) }}" required>

        <label>Color:</label>
        <input type="text" name="color" value="{{ old('color', $seed->color) }}" required>

        <label>Image URL:</label>
        <input type="url" name="image" value="{{ old('image', $seed->image) }}" required>

        <label>Price (SEK):</label>
        <input type="number" name="price_sek" value="{{ old('price_sek', $seed->price_sek) }}" required>

        <label>Seed Count:</label>
        <input type="number" name="seed_count" value="{{ old('seed_count', $seed->seed_count) }}" required>

        <label>Organic:</label>
        <select name="organic" required>
            <option value="1" {{ $seed->organic ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ !$seed->organic ? 'selected' : '' }}>No</option>
        </select>

        <button type="submit">Update Seed</button>
    </form>

    <a href="{{ route('dashboard') }}">Cancel</a>
@endsection