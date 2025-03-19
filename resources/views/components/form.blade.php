@props(['seed' => null])

@csrf
{{-- <div>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name', $seed?->name) }}">
</div>
<div>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{ old('description', $seed?->description) }}">
</div>
<div>
    <label for="annuality">Annuality</label>
    <select name="annuality" id="annuality">
        <option value="annual" {{ old('annuality', $seed?->annuality) == 'annual' ? 'selected' : '' }}>Annual</option>
        <option value="perennial" {{ old('annuality', $seed?->annuality) == 'perennial' ? 'selected' : '' }}>Perennial</option>
        <option value="biennial" {{ old('annuality', $seed?->annuality) == 'biennial' ? 'selected' : '' }}>Biennial</option>
    </select>
</div>
<div>
    <label for="height_cm">Height in centimeters</label>
    <input type="number" name="height_cm" id="height_cm" , value="{{ old('height_cm', $seed?->height_cm) }}">
</div>
<div>
    <label for="color">Color</label>
    <input type="text" name="color" id="color" value="{{ old('color', $seed?->color) }}">
</div>
<div>
    <label for="image">Image</label>
    <input type="url" name="image" id="image" value="{{ old('image', $seed?->image) }}">
</div>
<div>
    <label for="price_sek">Price</label>
    <input type="number" name="price_sek" id="price_sek" value="{{ old('price_sek', $seed?->price_sek) }}">
</div>
<div>
    <label for="seed_count">How many seeds in packet</label>
    <input type="number" name="seed_count" id="seed_count" value="{{ old('seed_count', $seed?->seed_count) }}">
</div>
<div>
    <label for="organic">Organic</label>
    <select name="organic" id="organic">
        <option value="1" {{ old('organic', $seed?->organic) == 1 ? 'selected' : ''  }}>Yes</option>
        <option value="0" {{ old('organic', $seed?->organic) == 0 ? 'selected' : '' }}>No</option>
    </select>
</div>
<button type="submit">Save</button> --}}

<label for="name">Name</label>
                    <input type="text" name="name" id="name">
        
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description">

                    <label for="annuality">Annuality</label>
                    <input type="radio" id="annual" name="annuality" value="annual">
                    <label for="annual">Annual</label><br>
                    <input type="radio" id="biennial" name="annuality" value="biennial">
                    <label for="biennial">Biennial</label><br>
                    <input type="radio" id="perennial" name="annuality" value="perennial">
                    <label for="perennial">Perennial</label>

                    <label for="height_cm">Height in centimeters</label>
                    <input type="number" name="height_cm" id="height_cm">
            
                    <label for="color">Color</label>
                    <input type="color" name="color" id="color">
            
                    <label for="image">Image</label>
                    <input type="url" name="image" id="image">
            
                    <label for="price_sek">Price</label>
                    <input type="number" name="price_sek" id="price_sek">
                
                    <label for="seed_count">How many seeds in packet</label>
                    <input type="number" name="seed_count" id="seed_count">
        
                    <label for="organic">Organic</label>
                    <select name="organic" id="organic">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>

                    <label>Category</label><br>
                    <input type="checkbox" name="categories[]" value="flowers"> Flowers<br>
                    <input type="checkbox" name="categories[]" value="vegetables"> Vegetables<br>
                    <input type="checkbox" name="categories[]" value="herbs"> Herbs<br>

                    <label>Where to Sow</label><br>
                    <input type="checkbox" name="where_to_sow[]" value="sun"> Sun<br>
                    <input type="checkbox" name="where_to_sow[]" value="shade"> Shade<br>
                  
                    <label>When to Sow</label><br>
                    @foreach(['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'] as $month)
                        <input type="checkbox" name="when_to_sow[]" value="{{ $month }}"> {{ ucfirst($month) }}<br>
                    @endforeach


                    <label>When to Harvest</label><br>
                    @foreach(['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'] as $month)
                        <input type="checkbox" name="when_to_harvest[]" value="{{ $month }}"> {{ ucfirst($month) }}<br>
                    @endforeach

                    

                <button type="submit">Add new product</button>