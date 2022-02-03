<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleRoute extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;
    protected $primeryKey = ['route_id','role_id'];

    protected $fillable = [
        'route_id', 'role_id'
    ];

    public function route()
    {
        # code...
        return $this->belongsTo(Route::class,'route_id','id');
    }

    public function role()
    {
        # code...
        return $this->belongsTo(Role::class,'role_id','id');
    }
}
