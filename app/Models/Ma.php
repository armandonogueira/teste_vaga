<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ma extends Model
{
    use HasFactory;

    // Here defines the name of the table used
    protected $table = 'medicalappointment';

    protected $fillable = [
        'specialty',
        'doctor',
        'patient',
        'birthdate',
        'responsible_name',
        'responsible_cpf',
        'medicalappointment',
    ];

    
    protected $casts = [
        'updated_at' => 'datetime',
    ];

}
