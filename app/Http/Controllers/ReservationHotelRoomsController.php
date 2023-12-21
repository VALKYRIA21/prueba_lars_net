<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;

// Models
use App\Models\Reservation;

class ReservationHotelRoomsController extends Controller
{
    //
    // Function para acceder a la vista principal del formulario
    public function indexReservation(){
        return view('reservations.create_reservations');
    }
    // Funcion para crear la reservacion
    public function createReservation(Request $request){
        Session::flash('reservacion_create','La reserva se creo de manera correcta, Gracias✅');
    }


    // Function para acceder a la vista de confirmacion de reserva o verificarcion
    public function indexConfirmReservation(){
        return view('reservations.confirm_reservations');
    }
      // Function para verificar la confirmacion de reserva
    public function verificationReservation(Request $request){
        Session::flash('error','Error,');

    }

}
