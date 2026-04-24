<?php

namespace App\Http\Controllers;

use App\Models\User;


class ChefController extends Controller
{
    public function index()
    {
        $chef = User::list()->get();
        return view('pages.prototype.users.chef-list.index', compact('chef'));
    }
    public function show(string $id)
    {
        $chef = User::list()->author($id)->first();

        return view('pages.prototype.users.profile.show', compact('chef'));
    }
    //
    public function showPortfolio(string $id)
    {
        $chef = User::list()->author($id)->first();
        $featured_data = $chef->recipes()->where('featured', 1)->get();

        return view('pages.prototype.users.portfolio.main', compact('chef', 'featured_data'));
    }
}
