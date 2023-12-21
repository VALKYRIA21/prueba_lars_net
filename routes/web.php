<?php

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

// Routes reservations
// Ruta para acceder al formulario de la creación de la reservación
Route::get('/reservation',[App\Http\Controllers\ReservationHotelRoomsController::class, 'indexReservation'] )->name('reservation');
// Ruta para enviar los datos del formulario hacía el controller y crear la reservacion en la base de datos
Route::post('/create_reservations', [App\Http\Controllers\ReservationHotelRoomsController::class, 'createReservation'] )->name('create_reservations');
