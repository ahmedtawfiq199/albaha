<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobile1','mobile2','telephone_number','email'
    ];

    public function order()
    {
        # code...
        return $this->hasOne(Order::class,'contact_detail_id','id');
    }

    public function guarantor()
    {
        # code...
        return $this->hasOne(Guarantor::class,'contact_detail_id','id');
    }
}
