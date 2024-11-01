<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideogameController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/videogame', [VideogameController::class, 'index'])->name('videogame.index');

Route::post('/videogame', [VideogameController::class, 'store'])->name("videogame.store");

Route::get('/videogame/create', [VideogameController::class, 'create'])->name("videogame.create");

Route::get('/videogame/{id}', [VideogameController::class, 'show'])->name("videogame.show");

Route::get('/videogame/{id}/edit', [VideogameController::class, 'edit'])->name("videogame.edit");

Route::put('/videogame/{id}', [VideogameController::class, 'update'])->name("videogame.update");

Route::delete('/videogame/{id}', [VideogameController::class, 'destroy'])->name("videogame.delete");