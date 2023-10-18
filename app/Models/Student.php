<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Passport\HasApiTokens;

class Student extends Model
{
    use HasFactory;

protected $fillable =['name',
                    'last_name',
                    'control',
                    'email',
                    'semester',
                    'program_id'];


    public function program(): BelongsTo
    {
        return $this->BelongsTo(Programs::class);
    }
    
}
