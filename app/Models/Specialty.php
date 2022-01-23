<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;
    
    // Here defines the name of the table used
    protected $table = 'specialty';

    protected $fillable = [
        'specialty',
        'status',
    ];

    
    protected $casts = [
        'updated_at' => 'datetime',
    ];
}
