<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    
    protected $fillable = [
        'date',
        'time',
        'guests',
        'name',
        'phone',
        'message',
        'status',
        'email',
    ];
    use HasFactory;

    
}
