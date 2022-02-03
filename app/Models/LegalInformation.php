<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'legal_format','legal_format_other','license','order_id'
    ];

    public function order()
    {
        # code...
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function partners()
    {
        # code...
        return $this->hasMany(Partner::class,'legal_information_id','id');
    }
}
