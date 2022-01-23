<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    // Here defines the name of the table used
    protected $table = 'patient';

    protected $fillable = [
        'name',
        'cpf',
        'telephone',
        'email',
        'zipcode',
        'address',
        'number',
    ];

    
    protected $casts = [
        'updated_at' => 'datetime',
    ];

}
