<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationHotelRoomsController extends Controller
{
    //
    // Function para acceder a la vista principal del formulario
    public function indexReservation(){
        return view('reservations.create_reservations');
    }
    // Funcion para crear la reservacion
    public function createReservation(Request $request){
        dd($request->all());
    }

}
