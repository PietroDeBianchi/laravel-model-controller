<?php
// include class PageControlle with the path specification
use App\Http\Controllers\Guest\PageController;
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
// Route::get from App\Http\Controllers\Guest -> PageController.php
Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/movies', [PageController::class, 'movies'])->name('movies');

Route::get('/series', [PageController::class, 'series'])->name('series');
