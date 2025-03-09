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
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
