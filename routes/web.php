<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\DetailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gioi-thieu', [AboutController::class, 'index'])->name('about');
Route::get('/dich-vu', [ServiceController::class, 'index'])->name('service');
Route::get('/tin-tuc', [BlogController::class, 'index'])->name('blog');
Route::get('/tin-tuc/{id}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/detail', [DetailController::class, 'index'])->name('detail');
Route::prefix('lien-he')->group(function(){
    Route::get('/', [ContactController::class, 'index'])->name('contact');
    // Route::get('add-contact', [ContactController::class, 'store']);
});
Route::post('/add-contact', [ContactController::class, 'store'])->name('contact.store');

Route::prefix('users')->middleware(['auth','isUser'])->group(function () {
    Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'homeuser'])->name('homeuser');
});

Route:: prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    Route::get('posts', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('posts.index');
    Route::get('add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('add-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('update-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('delete-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'destroy'])->name('posts.destroy');

    Route::get('user',[App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('user/{user_id}',[App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('update-user/{user_id}',[App\Http\Controllers\Admin\UserController::class, 'update']);

    Route::get('slider', [App\Http\Controllers\Admin\SliderController::class, 'index'])->name('slider');
    Route::get('add-slider', [App\Http\Controllers\Admin\SliderController::class, 'create']);
    Route::post('add-slider', [App\Http\Controllers\Admin\SliderController::class, 'store']);
    Route::get('edit-slider/{sliders_id}', [App\Http\Controllers\Admin\SliderController::class, 'edit']);
    Route::put('update-slider/{sliders_id}', [App\Http\Controllers\Admin\SliderController::class, 'update']);
    Route::get('delete-slider/{sliders_id}', [App\Http\Controllers\Admin\SliderController::class, 'destroy']);
});