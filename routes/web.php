<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\JobFinderController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');

Route::resource('jobfinder', JobFinderController::class);
Route::resource('user', UserController::class);

Route::resource('notification', NotificationController::class);
Route::get('/notification', [NotificationController::class, 'index'])->name('notification.index');
Route::post('/notification', [NotificationController::class, 'store'])->name('notification.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
