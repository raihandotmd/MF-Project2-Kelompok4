<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function cinema()
    {
        return $this->belongsTo(Cinemas::class, 'cinema_id');
    }

    public function movie_order()
    {
        return $this->hasMany(MovieOrder::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movies::class, 'movie_id');
    }
}
