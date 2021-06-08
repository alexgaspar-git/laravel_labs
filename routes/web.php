<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\VideoController;
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

// ------------FRONT------------
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blogpost/{id}', [FrontController::class, 'blogpost'])->name('blogpost');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/image-resize', [LogoController::class, 'imgResize'])->name('img-resize');

// ------------BACK------------
Route::get('/admin', [BackController::class, 'index'])->middleware(['auth'])->name('dashboard');

//Home
Route::resource('/admin/video', VideoController::class);
Route::resource('/admin/discover', DiscoverController::class);
Route::resource('/admin/image', ImageController::class);
Route::resource('/admin/title', TitleController::class);
//Service
Route::resource('/admin/service', ServiceController::class);
Route::resource('/admin/feature', FeatureController::class);

// ------------NEWSLETTER------------
Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletterStore');

// ------------MAIL------------
Route::post('/mail', [ContactController::class, 'store'])->name('contactform');

//Comments
// store
Route::post('/blogpost/create/{id}', [CommentController::class, 'store'])->name('comment.store');
// destroy
Route::delete('/blogpost/{id}/delete', [CommentController::class, 'destroy'])->name('comment.destroy');

//Search
Route::get('/blog/search', [FrontController::class,'search'])->name('search'); 
    



require __DIR__.'/auth.php';