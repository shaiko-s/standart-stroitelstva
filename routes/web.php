<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\ContactController;

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
    Route::resource('vacancies', VacancyController::class)->only(['index', 'store']);
    Route::resource('contacts', ContactController::class)->only(['index', 'store']);
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
