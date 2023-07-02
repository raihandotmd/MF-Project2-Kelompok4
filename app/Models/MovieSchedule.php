<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movies;
use App\Models\Cinema;

class MovieSchedule extends Model
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

    public function movie()
    {
        return $this->belongsTo(Movies::class);
    }
    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }
}
