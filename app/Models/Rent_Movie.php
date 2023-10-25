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
    
    public function employ(): BelongsTo
    {
        return $this->BelongsTo(Employ::class);
    }
    public function client(): BelongsTo
    {
        return $this->BelongsTo(Client::class);   
    }
    public function movie(): BelongsTo
    {
        return $this->BelongsTo(Movie::class);   
    }

}
