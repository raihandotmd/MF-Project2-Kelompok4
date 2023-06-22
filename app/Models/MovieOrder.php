<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieOrder extends Model
{
    use HasFactory;
        //memanggil table yang akan dikelola
        protected $table = 'MovieOrder';
        public $timestamps = false;
        //mendklarasikan kolom yang ada dalam table
        protected $fillable = [
            'movie_schedule',
            'user_id',
            'seat',
            'ticket_code',
            
            
        ];
        public function users(){
            return $this->belongTo(MovieOrder::class);
        }
        public function getAllData(){
            return DB::table('Movie_order')
            ->join('users', 'Movie_order.user_id', '=','user.id')
            ->select('Movie_order*', 'users.name as name')
            ->get();
    
    
        }
}
