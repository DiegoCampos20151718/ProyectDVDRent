<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie_Gender extends Model
{
    use HasFactory;
    protected $fillable =['name_gender'];
    
    public function movies(): HasMany
    {
    return $this->HasMany(Movie::class);
    }

}
