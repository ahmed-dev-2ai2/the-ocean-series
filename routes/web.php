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