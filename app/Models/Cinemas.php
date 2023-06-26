<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinemas extends Model
{
    use HasFactory;
    protected $table = 'cinemas';
    public $timestamps = false;
    protected $fillable = [
        'code',
    ];
}
