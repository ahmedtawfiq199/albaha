<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function routes()
    {
        # code...
        return $this->belongsToMany(Route::class,'role_routes','route_id','role_id');
    }

    public function users()
    {
        # code...
        return $this->belongsToMany(User::class,'user_roles','user_id','role_id');
    }
}
