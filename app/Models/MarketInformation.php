<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketInformation extends Model
{
    use HasFactory;

    protected $fillable = [
       'customer_natuer','customer_natuer_other','customer_number',
       'customer_description','expected_order_size','number_of_direct_competitors',
       'information_about_competitors','comper_with_competitors','comper_with_competitors_description',
       'comper_price_with_competitors','comper_price_with_competitors_other',
       'distribution_channel','distribution_channel_other','order_id'
    ];

    public function order()
    {
        # code...
        return $this->belongsTo(Order::class,'order_id','id');
    }
}
