<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetailWithSomebody extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','mobile','address','type_of_kinship','order_id'
    ];

    public function order()
    {
        # code...
        return $this->belongsTo(Order::class,'order_id','id');
    }
}
