<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
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

Route::get('/message', function () {
    return view('app.confirmation');
})->name('message');

// Route::post('reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::prefix('admin')->group( function () {
    Route::resource('service', ServiceController::class);
    Route::resource('reservation', ReservationController::class);
});

// Route::get('admin/service/create', [ServiceController::class,'create'])->name('services.create');
Route::post('admin/service', [ServiceController::class,'store'])->name('services.store ');

Route::get('/admin', function () {
    return view('dashboardapp');
})->name('contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// use App\Http\Controllers\ReservationController;

// Route::get('/reservation', [ReservationController::class, 'create']);
// Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
// Route::get('/reservation/confirmation', [ReservationController::class, 'confirmation'])->name('reservation.confirmation');

require __DIR__.'/auth.php';
