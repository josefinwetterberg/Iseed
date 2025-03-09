{{-- Flytta över formuläret från dashboarden till en egen vy --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="page-title">
            {{ __('Add a New Seed') }}
        </h2>
    </x-slot>

    <div class="main-content">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Add a New Seed</h1>

                    @include('errors')

                    <form action="{{ route('seeds.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="annuality">Annuality</label>
                            <input type="text" name="annuality" id="annuality" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="height_cm">Height (cm)</label>
                            <input type="number" name="height_cm" id="height_cm" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="color">Color</label>
                            <input type="text" name="color" id="color" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="image">Image URL</label>
                            <input type="url" name="image" id="image" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="price_sek">Price (SEK)</label>
                            <input type="number" name="price_sek" id="price_sek" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="seed_count">Seed Count</label>
                            <input type="number" name="seed_count" id="seed_count" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="organic">Organic</label>
                            <select name="organic" id="organic" class="form-control">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Seed</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>