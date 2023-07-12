<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MovieGenre;

class Movies extends Model
{
    use HasFactory;
    protected $table = 'movies';
    protected $fillable = [
        'code',
        'title',
        'description',
        'rating',
        'genre_id',
        'image',
        'trailer',
        'duration',
        'release_date',
        'director',
        'cast',
        'country',
        'language',
        'age_limit',
        'created_at',
        'updated_at'
    ];

    public function movie_schedule()
    {
        return $this->hasMany(MovieSchedule::class);
    }

    public function genre()
    {
        return $this->belongsTo(MovieGenre::class);
    }
    
}
