<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seats extends Model
{
    use HasFactory;
    protected $table = 'seats';
    protected $fillable = [
        'cinema_id',
        'seat_code',
        'seat_status',
        'created_at',
        'updated_at'
    ];
}
