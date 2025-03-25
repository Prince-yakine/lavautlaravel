<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app.acceuil');
})->name('acceuil');

Route::get('/about', function () {
    return view('app.about');
})->name('about');

Route::get('/services', function () {
    return view('app.service');
})->name('services');

Route::get('/reservation', function () {
    return view('app.booking');
})->name('reservation');

Route::get('/techniciens', function () {
    return view('app.team');
})->name('techniciens');


Route::get('/temoignages', function () {
    return view('app.testimonial');
})->name('temoignages');

Route::get('/contact', function () {
    return view('app.contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
