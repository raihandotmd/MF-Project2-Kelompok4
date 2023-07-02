<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    use HasFactory;
        //panggil tabel
        protected $table = 'users_roles';
        //kolom yang bisa diisi
        protected $fillable = [
            'nama',
        ];

}
