<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RecipeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/recettes', [RecipeController::class, 'index']);
Route::get('/recettes/{url}', [RecipeController::class, 'show']);

Route::resource('contact', ContactController::class);
// Route::get('/contact', [ContactController::class, 'index']);
// Route::post('/contact', [ContactController::class, 'store']);
