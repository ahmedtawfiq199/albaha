<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
       'id_image', 'national_address', 'bank_account', 'academic_certificate_image',
       'cv', 'user_training_certificate', 'guarantor_id_image',
       'guarantor_national_address', 'supporting_document', 'another_file',
       'order_id', 'user_id'
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
