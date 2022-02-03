<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id', 'question_id', 'answer',
    ];

    public $incrementing = false;
    public $timestamps = false;
    protected $primeryKey = ['order_id','question_id'];

    public function order()
    {
        # code...
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function question()
    {
        # code...
        return $this->belongsTo(Question::class,'question_id','id');
    }
}
