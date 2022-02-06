<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionTool extends Model
{
    use HasFactory;

    protected $fillable = [
        'statment', 'number', 'technical_information_id'
    ];

    public function technicalInformation()
    {
        # code...
        return $this->belongsTo(TechnicalInformation::class,'technical_information_id','id');
    }
}
