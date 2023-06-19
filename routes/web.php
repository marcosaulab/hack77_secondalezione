<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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


// ! esiste una rotta che corrisponde all'uri / e ha come metodo GET ?
Route::get('/', [PublicController::class, 'homepage'])->name('home');

Route::get('/chisiamo', [PublicController::class, 'chisiamo'])->name('aboutus');


Route::get('/movie/{id}', [PublicController::class, 'moviedetails'])->name('movie.show');

Route::get('/movie/genre/{genre}', [PublicController::class, 'movieByGenre'])->name('movie.genre');
