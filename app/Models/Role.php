<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //panggil tabel
    protected $table = 'users_roles';

    public $timestamps = false;

    //kolom yang bisa diisi
    protected $fillable = [
        'name',
    ];
}
