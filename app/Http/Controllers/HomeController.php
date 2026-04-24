<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $files = Storage::files('public/slider');
        return view('pages.prototype.users.home.homepage', compact('files'));
    }

}
