<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __invoke(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
        ]);

        $category = new Category();
        $category->name = $request->get('name');
        $category->save();
        return redirect('/dashboard',);
    }
}
