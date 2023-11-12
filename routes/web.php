<?php

use App\Http\Controllers\ProfileController;
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
    return view('main');
})->name('main');

Route::group([], function () {
    Route::get('/organization', function () {return view('organization');})->name('organization');
    Route::get('/geodesy', function () {return view('geodesy');})->name('geodesy');
    Route::get('/geology', function () {return view('geology');})->name('geology');
    Route::get('/ecology', function () {return view('ecology');})->name('ecology');
    Route::get('/vacancies', function () {return view('vacancies');})->name('vacancies');
    Route::get('/contacts', function () {return view('contacts');})->name('contacts');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
