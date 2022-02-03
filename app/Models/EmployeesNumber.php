<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_of_employees', 'job_title', 'technical_information_id'
    ];

    public function technicalInformation()
    {
        # code...
        return $this->belongsTo(TechnicalInformation::class,'technical_information_id','id');
    }
}
