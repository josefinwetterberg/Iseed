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

                    <label for="category">Category</label>
                    <input type="checkbox" name="category" id="category">
                    <label for="category">Flowers</label>
                    <input type="checkbox" name="category" id="category">
                    <label for="category">Vegetables</label>
                    <input type="checkbox" name="category" id="category">
                    <label for="category">Herbs</label>

                    <label for="where-to-sow">Where to sow</label>
                    <input type="checkbox" name="sun" id="sun">
                    <label for="where-to-sow">Sun</label>
                    <input type="checkbox" name="shade" id="shade">
                    <label for="where-to-sow">Shade</label>
                  
                    <label for="when-to-sow">When to sow</label>
                    <input type="checkbox" name="january" id="january">
                    <label for="when-to-sow">January</label>
                    <input type="checkbox" name="february" id="february">
                    <label for="when-to-sow">February</label>
                    <input type="checkbox" name="march" id="march">
                    <label for="when-to-sow">March</label>
                    <input type="checkbox" name="april" id="april">
                    <label for="when-to-sow">April</label>
                    <input type="checkbox" name="may" id="may">
                    <label for="when-to-sow">May</label>
                    <input type="checkbox" name="june" id="june">
                    <label for="when-to-sow">June</label>
                    <input type="checkbox" name="july" id="july">
                    <label for="when-to-sow">July</label>
                    <input type="checkbox" name="august" id="august">
                    <label for="when-to-sow">August</label>
                    <input type="checkbox" name="september" id="september">
                    <label for="when-to-sow">September</label>
                    <input type="checkbox" name="october" id="october">
                    <label for="when-to-sow">October</label>
                    <input type="checkbox" name="november" id="november">
                    <label for="when-to-sow">November</label>
                    <input type="checkbox" name="december" id="december">
                    <label for="when-to-sow">December</label>

                    <label for="when-to-harvest">When to harvest</label>
                    <input type="checkbox" name="january" id="january">
                    <label for="when-to-harvest">January</label>
                    <input type="checkbox" name="february" id="february">
                    <label for="when-to-harvest">February</label>
                    <input type="checkbox" name="march" id="march">
                    <label for="when-to-harvest">March</label>
                    <input type="checkbox" name="april" id="april">
                    <label for="when-to-harvest">April</label>
                    <input type="checkbox" name="may" id="may">
                    <label for="when-to-harvest">May</label>
                    <input type="checkbox" name="june" id="june">
                    <label for="when-to-harvest">June</label>
                    <input type="checkbox" name="july" id="july">
                    <label for="when-to-harvest">July</label>
                    <input type="checkbox" name="august" id="august">
                    <label for="when-to-harvest">August</label>
                    <input type="checkbox" name="september" id="september">
                    <label for="when-to-harvest">September</label>
                    <input type="checkbox" name="october" id="october">
                    <label for="when-to-harvest">October</label>
                    <input type="checkbox" name="november" id="november">
                    <label for="when-to-harvest">November</label>
                    <input type="checkbox" name="december" id="december">
                    <label for="when-to-harvest">December</label>
                    

                <button type="submit">Add new product</button>