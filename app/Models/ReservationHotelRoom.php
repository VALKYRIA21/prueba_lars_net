<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationHotelRoom extends Model
{
    use HasFactory;

    protected $table = 'reservations_hotel_rooms';

    protected $fillable = ['nombre_usuario', 'documento_usuario', 'fecha_reservacion', 'cuarto_reservacion', 'version_disponibilidad_reservacion'];

    use HasFactory;

    public function incrementVersion()
    {
        $this->version_disponibilidad_reservacion++;
        $this->save();
    }
}
