<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name', 'project_specialization','project_specialization_other',
        'nature_project_other','project_format_other',
        'nature_project', 'project_format', 'competitive_advantages', 'order_id'
    ];

    public function order()
    {
        # code...
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function projectProducts()
    {
        # code...
        return $this->hasMany(ProjectProduct::class,'project_information_id','id');
    }
}
