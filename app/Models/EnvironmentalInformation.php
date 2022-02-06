<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnvironmentalInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'carbon_waste', 'carbon_waste_other', 'harmful_waste', 'harmful_waste_other',
        'nature_waste_generated', 'order_id'
    ];

    public function order()
    {
        # code...
        return $this->belongsTo(Order::class,'order_id','id');
    }
}
