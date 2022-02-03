<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'role_id'
    ];

    public $incrementing = false;
    public $timestamps = false;
    protected $primeryKey = ['order_id','question_id'];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function role()
    {
        # code...
        return $this->belongsTo(Role::class,'role_id','id');
    }
}
