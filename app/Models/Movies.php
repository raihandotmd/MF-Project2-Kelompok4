<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    protected $table = 'movies';
    protected $fillable = [
        'title',
        'description',
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
}
