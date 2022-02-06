<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_category', 'question'
    ];

   public function orders()
   {
       # code...
       return $this->belongsToMany(Order::class,'order_questions','order_id','question_id')
                    ->using(OrderQuestion::class)
                    ->withPivot(['answer']);
   }
}
