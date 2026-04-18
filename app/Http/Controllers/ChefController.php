<?php

namespace App\Http\Controllers;

use App\Models\User;


class ChefController extends Controller
{
    public function index()
    {
        $chefs_data = User::list()->get();

        return view('pages.prototype.users.chef-list.index', compact('chefs_data'));
    }
    public function show(string $id)
    {
        $chefs = User::list()->chefs($id)->first();

        return view('pages.prototype.users.profile.show', compact('chefs'));
    }
    //
    public function showPortfolio(string $id)
    {
        $chefs = User::list()->author($id)->first();
        $featured_data = $chefs->recipes()->where('featured', 1)->get();

        return view('pages.prototype.users.portfolio.main', compact('chefs', 'featured_data'));
    }
}

