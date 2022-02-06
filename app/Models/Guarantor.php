<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guarantor extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name', 'id_number', 'date_of_birth', 'address_place',
        'employer', 'employer_name', 'employer_address', 'career', 'salary',
        'contact_detail_id', 'order_id'
    ];

    public function order()
    {
        # code...
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function contactDetail()
    {
        # code...
        return $this->belongsTo(ContactDetail::class,'contact_detail_id','id');
    }
}
