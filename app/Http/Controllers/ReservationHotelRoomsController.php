<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Events
use App\Events\ReservationCreated;
use App\Events\ReservationCompleted;


// Models
use App\Models\ReservationHotelRoom;

class ReservationHotelRoomsController extends Controller
{
    //
    // Function para acceder a la vista principal del formulario
    public function indexReservation(){
        return view('reservations.create_reservations');
    }
    // Funcion para crear la reservacion
    public function createReservation(Request $request){
        try {
            DB::beginTransaction();


            // Se valida el formulario de la reservacion
            $this->validate($request, [
                'name' => 'required|string',
                'documento' => 'required|string',
                'date' => 'required|date',
                'cuarto' => 'required|string',
            ]);

            //Se crear la reservacion y se guarda los datos en la base de datos
            $reservation = new ReservationHotelRoom;
            $reservation->nombre_usuario= $request->name;
            $reservation->documento_usuario= $request->documento;
            $reservation->fecha_reservacion= $request->date;
            $reservation->cuarto_reservacion= $request->cuarto;
            $reservation->version_disponibilidad_reservacion= 1;
            $reservation->save();

            event(new ReservationCreated($reservation));



            DB::commit();

            Session::flash('reservacion_create','La reserva se creo de manera correcta, Gracias✅');
            return redirect('reservation');
        } catch (ValidationException $e) {
            DB::rollBack();
            Session::flash('error', 'Error, ocurrió un error al crear la reservación ❌');
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        } catch (\Exception $e) {
            DB::rollBack();
            Session::flash('error', 'Error, ocurrió un error al crear la reservación ❌');
            return redirect()->back()->withInput();
        }
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
