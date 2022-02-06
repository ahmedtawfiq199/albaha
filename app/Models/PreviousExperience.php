<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviousExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_place','job_name','user_id','order_id'
    ];

    public function order()
    {
        # code...
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function user()
    {
        # code...
        return $this->belongsTo(User::class,'user_id','id');
    }
}
