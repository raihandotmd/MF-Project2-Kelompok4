<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cinema;

class seats extends Model
{
    use HasFactory;
    protected $table = 'seats';
    protected $fillable = [
        'cinema_id',
        'seat_code',
        'seat_status',
        'created_at',
        'updated_at'
    ];
    public function cinema(){
        return $this->belongsTo(Cinema::class);
    }
}
