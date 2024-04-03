<?php

use App\Http\Controllers\AdressLocationController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserRegisterController;
use App\Models\AdressLocation;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.template');
});
Route::resource('/teams', TeamController::class);
Route::resource('/categories', CategoriesController::class);
Route::resource('/tags', TagsController::class);
Route::resource('/posts', ArticlesController::class);
Route::resource('/events', EventsController::class);
Route::resource('/adress_location', AdressLocationController::class);
Route::resource('/users_', UserRegisterController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
