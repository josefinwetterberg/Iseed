<?php

namespace App\Http\Controllers;

use App\Models\Seed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seeds = Seed::all();
        return view('dashboard', ['seeds' => $seeds]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //För att ha en create view för att skapa en ny seed.
        return view('seeds.create');
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
    //This sends the specific seed’s data to the seeds.edit view.
    //The view will use this data to pre-fill an edit form.
    public function edit(Seed $seed)
    {
        return view('seeds.edit', ['seed' => $seed]);
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
