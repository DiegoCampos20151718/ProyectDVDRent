<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie_Clasification extends Model
{
    use HasFactory;
    protected $fillable =['name_of_clasification',
    'price_of_clasification'];
}
