<?php

use Illuminate\Support\Facades\Route;
use App\Models\item;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AddController;

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


Route::get('/test', [FrontController::class, 'test']); //afficher tous les articles
Route::post('/add', [AddController::class, 'add'])->name('add'); //ajouter un article

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = Auth::user();
    $items = item::get();

  return view('dashboard')->with('items', $items)->with('user', $user);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
