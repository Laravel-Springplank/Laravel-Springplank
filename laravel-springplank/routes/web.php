<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsletterController;

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

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('home', function () {
    return view('home');
})->middleware('verified', 'auth');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class)
    ->middleware('auth');

Route::get('newsletter', [NewsletterController::class, 'create'])->name('newsletter.create');
Route::post('newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
