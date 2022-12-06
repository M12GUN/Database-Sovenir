<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\sovenirController;
use App\Http\Controllers\penjualController;
use App\Http\Controllers\strukController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('sovenir', sovenirController::class);
Route::resource('penjual', penjualController::class);
Route::resource('struk', strukController::class);
Route::post("sovenir/soft/{id}", [sovenirController::class, "soft"])->name("sovenir.soft");
Route::post("penjual/soft/{id}", [penjualController::class, "soft"])->name("penjual.soft");

require __DIR__.'/auth.php';
