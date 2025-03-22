<?php

namespace App\Http\Controllers;

use App\Models\Seed;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $query = Seed::query();

        // Filter by name
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        // Filter by category
        if ($request->filled('category_id')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->where('categories.id', $request->category_id);
            });
        }

        // Filter by color
        if ($request->has('color') && is_array($request->color) && !empty($request->color)) {
            $query->whereIn('color', $request->color);
        }

        // Filter by annuality
        if ($request->filled('annuality')) {
            $query->where('annuality', $request->annuality);
        }

        // Filter by height range
        if ($request->filled('min_height')) {
            $query->where('height_cm', '>=', $request->min_height);
        }
        if ($request->filled('max_height')) {
            $query->where('height_cm', '<=', $request->max_height);
        }

        // Filter by price range
        if ($request->filled('min_price')) {
            $query->where('price_sek', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price_sek', '<=', $request->max_price);
        }

        // Filter by organic status
        if ($request->filled('organic')) {
            $query->where('organic', $request->organic);
        }

        //Filter by seed count
        if ($request->filled('min_seed_count')) {
            $query->where('seed_count', '>=', $request->min_seed_count);
        }
        if ($request->filled('max_seed_count')) {
            $query->where('seed_count', '<=', $request->max_seed_count);
        }

        // Execute the query
        $seeds = $query->get();

        $colors = Seed::select('color')->distinct()->pluck('color')->toArray();

        // Get all categories for the dropdown
        $categories = Category::all();

        return view('dashboard', compact('seeds', 'categories', 'colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('seeds.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string|min:10',
            'annuality' => 'required|string',
            'height_cm' => 'required|integer',
            'color' => 'required|string',
            'image' => 'required|url',
            'price_sek' => 'required|integer',
            'seed_count' => 'required|integer',
            'organic' => 'required|boolean',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
        ]);

        $seed = new Seed();
        $seed->name = $request->get('name');
        $seed->description = $request->get('description');
        $seed->annuality = $request->get('annuality');
        $seed->height_cm = $request->get('height_cm');
        $seed->color = $request->get('color');
        $seed->image = $request->get('image');
        $seed->price_sek = $request->get('price_sek');
        $seed->seed_count = $request->get('seed_count');
        $seed->organic = $request->get('organic');
        $seed->user_id = Auth::id();
        $seed->save();

        if ($request->has('categories')) {
            $seed->categories()->attach($request->categories);
        }

        return redirect('/dashboard')->with('success', 'Seed added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Seed $seed)
    {
        //Behöver skapa en seed.show view för att visa en specifik seed. Kanske inte är nödvändigt för oss?
        return view('seeds.show', ['seed' => $seed]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Seed $seed)
    {
        $categories = Category::all();
        return view('seeds.edit', compact('seed', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seed $seed)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string|min:10',
            'annuality' => 'required|string',
            'height_cm' => 'required|integer',
            'color' => 'required|string',
            'image' => 'required|url',
            'price_sek' => 'required|integer',
            'seed_count' => 'required|integer',
            'organic' => 'required|boolean',
            'categories' => 'array',
        ]);

        $seed->update([
            'name' => $request->name,
            'description' => $request->description,
            'annuality' => $request->annuality,
            'height_cm' => $request->height_cm,
            'color' => $request->color,
            'image' => $request->image,
            'price_sek' => $request->price_sek,
            'seed_count' => $request->seed_count,
            'organic' => $request->organic,
        ]);

        if ($request->has('categories')) {
            $seed->categories()->sync($request->categories);
        } else {
            $seed->categories()->detach();
        }

        return redirect('/dashboard')->with('success', 'Seed updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seed $seed)
    {
        $seed->delete();
        return redirect('/dashboard')->with('success', 'Seed deleted successfully!');
    }
}
