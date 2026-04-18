<?php

namespace App\Http\Controllers;

use App\Models\Recipe;


class RecipeController extends Controller
{
    public function index()
    {
        $recipe_data = Recipe::list()->paginate(6);

        return view('pages.prototype.users.recipe-list.index', compact('recipe_data'));
    }

    public function show(string $id)
    {
        $recipe_data = Recipe::list()->recipe($id)->first();
        $chef = $recipe_data->user;
        return view('pages.prototype.users.recipe-single.show', compact('recipe_data', 'chef'));
    }
}
