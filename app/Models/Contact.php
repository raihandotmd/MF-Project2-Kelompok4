<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    public $timestamps = false;
    protected $fillable = [
        'name', 'email', 'phone'
    ];

    // Tambahan kode lainnya, seperti relasi dengan model lain, mutators, accessors, dll.
}
