<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'room_type', 'check_in', 'check_out', 'guests', 'name', 'email', 'phone',
    ];
}
