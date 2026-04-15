<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $files = Storage::files('public/slider');
        return view('pages.custom.users.home.homepage', compact('files'));
    }
}
