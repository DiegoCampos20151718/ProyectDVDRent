<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent_Movie extends Model
{
    use HasFactory;
    protected $fillable =['date_of_rent',
    'date_of_delivery',
    'state_of_rent',
    'total_price'];
    /*
    agregar referencias a otras tablas
    */
}
