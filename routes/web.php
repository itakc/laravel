<?php

use App\Http\Controllers\Admin\ReservationController;
use App\http\Controllers\MainController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

/ ajouter la route '/' associée avec l'action MainController::index()
// MainController est une classe et index est une méthode de cette classe
// cette route est nommée 'main.index'

*/
Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/menu', [MainController::class, 'menu'])->name('main.menu');
Route::get('/reservation', [MainController::class, 'reservation'])->name('main.reservation');
Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');
Route::get('/index1', [MainController::class, 'index1'])->name('main.index1');
Route::get('/carte1', [MainController::class, 'carte1'])->name('main.carte1');
Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');


//redirection interne
route::redirect('/foo', '/admin/reservation/create');

//redirection externe
route::redirect('/google', 'https://google.com');


//**back office
Route::get('/admin/reservation/create', [ReservationController::class, 'create'])->name('admin.reservation.create');
Route::post('/admin/reservation', [ReservationController::class, 'store'])->name('admin.reservation.store');

Route::get('/test', [MainController::class, 'test'])->name('main.test');
Route::get('/test-resa', [MainController::class, 'testReservation'])->name('main.testResa');



