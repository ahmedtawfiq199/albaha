<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 'project_information_id'
    ];

    public function projectInformation()
    {
        # code...
        return $this->belongsTo(ProjectInformation::class,'project_information_id','id');
    }
}
