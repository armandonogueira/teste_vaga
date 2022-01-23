<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Client extends Model
{
    use HasFactory;
    
    // Here defines the name of the table used
    protected $table = 'client';

    protected $fillable = [
        'name',
        'birthdate',
        'gender',
        'cpf',
        'rg',
        'email',
        'covenant',
        'cardnumber',
        'healthplan',
        'telephone',
    ];

    
    protected $casts = [
        'updated_at' => 'datetime',
    ];

}
