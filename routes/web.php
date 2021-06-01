<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NewsletterController;
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

// Front
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/image-resize', [LogoController::class, 'imgResize'])->name('img-resize');

// Back
Route::get('/admin', [BackController::class, 'back'])->name('back');
Route::get('/dashboard', function () {
    return view('back.admin');
})->middleware(['auth'])->name('dashboard');

// Newsletter
Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletterStore');

require __DIR__.'/auth.php';
