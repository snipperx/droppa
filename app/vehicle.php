<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    public $table = 'vehicles';

    // Mass assignable fields
    protected $fillable = [
        'name', 'model', 'image', 'milege'
    ];

    public function vehicle(){
        return $this->hasMany(booking::class, 'vehicle_id');
    }
}
