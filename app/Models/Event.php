<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'adresse',
        'date_heure',
        'categorie',
        'user_id',
        'max_participants'
    ];

    // protected $casts = [
    //     'start_date' => 'datetime',
    //     'end_date' => 'datetime'
    // ];
    
}
