<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatAllocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'trip_id',
        'seat_number',
        'seat',
        'created_at',
        'updated_at',
    ];
}
