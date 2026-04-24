<?php

namespace App\Http\Controllers;

use App\Models\Recipe;


class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::list()->paginate(6);

        return view('pages.prototype.users.recipe-list.index', compact('recipes'));
    }

    public function show(string $id)
    {
        $recipes = Recipe::list()->recipe($id)->first();
        $chef = $recipes->user;
        return view('pages.prototype.users.recipe-single.show', compact('recipes', 'chef'));
    }
}
