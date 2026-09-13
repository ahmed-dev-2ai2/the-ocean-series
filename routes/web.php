<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
});

// 🎥 Routes الخاصة بالفيديوهات
Route::resource('videos', VideoController::class);
Route::get('/services', function () {
    return view('pages.services');
})->name('services');
use App\Http\Controllers\AhmedPortfolioController;

Route::prefix('ahmed')->name('ahmed.')->group(function () {
    Route::get('/',        [AhmedPortfolioController::class, 'home'])->name('home');
    Route::get('/about',   [AhmedPortfolioController::class, 'about'])->name('about');
    Route::get('/projects',[AhmedPortfolioController::class, 'projects'])->name('projects');
    Route::get('/contact', [AhmedPortfolioController::class, 'contact'])->name('contact');
});