<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable =['no_copies',
    'title',
    'image',
    'actors',
    'synopsis'];
    
    public function movie_gender(): BelongsTo
    {
        return $this->BelongsTo(Movie_Gender::class);
    }
    public function movie_clasification(): BelongsTo
    {
        return $this->BelongsTo(Movie_Clasification::class);   
    }
    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);   
    }

}
