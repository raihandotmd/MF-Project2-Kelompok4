<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
            //memanggil table yang akan dikelola
            protected $table = 'MovieOrder';
            public $timestamps = false;
            //mendklarasikan kolom yang ada dalam table
            protected $fillable = [
                'name',
                'email',
                'password',
                'role_id',
                'remember_token',
                
                
            ];
            public function usersRoles(){
                return $this->belongTo(users::class);
            }
            public function getAllData(){
                return DB::table('Users')
                ->join('user_roles', 'users.user_roles_id', '=','user_roles_id')
                ->select('users.*', 'user_roles.name as name_role')
                ->get();

            }
        
        
        
}
