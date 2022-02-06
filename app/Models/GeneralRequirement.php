<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralRequirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'skills_needed', 'requirements_to_establish', 'order_id'
    ];


    public function order()
    {
        # code...
        return $this->belongsTo(Order::class,'order_id','id');
    }
}
