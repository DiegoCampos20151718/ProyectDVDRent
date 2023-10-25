<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie_Clasification extends Model
{
    use HasFactory;
    protected $fillable =['name_of_clasification',
    'price_of_clasification'];

    public function movies(): HasMany
    {
    return $this->HasMany(Movie::class);
    }
}
