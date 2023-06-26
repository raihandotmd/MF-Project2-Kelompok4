<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviesSchedule extends Model
{
    use HasFactory;
    protected $table = 'movie_schedule';
    protected $fillable = [
        'movie_id',
        'cinema_id',
        'starts',
        'ends',
        'price',
    ];
}
