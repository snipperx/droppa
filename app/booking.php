<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    public $table = 'bookings';
    // Mass assignable fields
    protected $fillable = [
        'pick_up_address', 'name','phone', 'date', 'time','labours', 'vehicle_id', 'Comment','drop_of_address',
        'drop_of_name','drop_of_name','drop_of_phone','comment'
    ];

    public function bookingVehicle() {
        return $this->belongsTo(vehicle::class, 'vehicle_id');
    }
}
