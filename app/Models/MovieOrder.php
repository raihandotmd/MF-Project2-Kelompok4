<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MovieSchedule;
use App\Models\User;

class MovieOrder extends Model
{
    use HasFactory;
        //memanggil table yang akan dikelola
        protected $table = 'movie_order';
        //mendklarasikan kolom yang ada dalam table
        protected $fillable = [
            'movie_schedule',
            'user_id',
            'seat',
            'ticket_code',
            
            
        ];
        public function users(){
            return $this->belongsTo(User::class, 'user_id');
        }
        public function movieSchedule(){
            return $this->belongsTo(MovieSchedule::class, 'movie_schedule');
        }
}
