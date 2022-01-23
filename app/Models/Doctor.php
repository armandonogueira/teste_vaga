<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    
    // Here defines the name of the table used
    protected $table = 'doctor';

    protected $fillable = [
        'name',
        'specialty',
        'crm',
    ];

    
    protected $casts = [
        'updated_at' => 'datetime',
    ];
}
