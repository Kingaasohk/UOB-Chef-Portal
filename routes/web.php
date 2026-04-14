<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;

Route::get('/', [ChefController::class, 'index'])->name('chefs.index');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Recipes
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');

// Chefs
Route::get('/chefs', [ChefController::class, 'index'])->name('chefs.index');
Route::get('/chefs/{id}', [ChefController::class, 'show'])->name('chefs.show');
Route::get('/chefs/{id}/portfolio', [ChefController::class, 'showPortfolio'])->name('chefs.portfolio.show');

// Prototype routes
require base_path('routes/prototype.php');

Auth::routes();
