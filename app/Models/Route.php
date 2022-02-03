<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_name', 'category', 'route'
    ];

    public function roles()
    {
        # code...
        return $this->belongsToMany(Role::class,'role_routes','role_id','route_id');
    }
}
