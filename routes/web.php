<?php
use App\Http\Controllers\{SiteController, ReservationController};
use Illuminate\Support\Facades\Route;
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/menu', [SiteController::class, 'menu'])->name('menu');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/reservation', [ReservationController::class, 'create'])->name('reservation');
Route::post('/reservation', [ReservationController::class, 'store'])->middleware('throttle:6,1')->name('reservation.store');
