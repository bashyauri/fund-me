<?php

use App\Http\Controllers\HomeController;
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
    return view('welcome');
});
Route::get('/donate', [HomeController::class, 'donate'])->name('donate');
Route::get('/resume', [HomeController::class, 'resume'])->name('resume');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');