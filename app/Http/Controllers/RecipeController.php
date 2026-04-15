<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    public function index()
    {
        $files = Storage::files('public/slider');
        return view('pages.custom.users.recipe-list.index', compact('files'));
    }
}
