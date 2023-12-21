<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'name','email','password','phone','city','image','major_id'
    ];

    function major(){
       return $this->BelongsTo(Major::class);
    }

    function bookings(){
        return $this->hasMany(Booking::class);
     }
     function rates(){
        return $this->hasOne(Rate::class);
     }
}
