<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    use HasFactory;
        //panggil tabel
        protected $table = 'UserRoles';
        //kolom yang bisa diisi
        protected $fillable = [
            'nama',
         ];
        public function usersRoles(){
        return $this->belongsTo(usersRoles::class);}

}
