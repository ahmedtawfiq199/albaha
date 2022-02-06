<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_number', 'products_size', 'services_number','project_place',
        'project_place_natuer','project_place_natuer_other','justifications_choosing_project',
        'production_style','production_systems','equipment_source','raw_materials','order_id'
    ];

    public function order()
    {
        # code...
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function productionTools()
    {
        # code...
        return $this->hasMany(ProductionTool::class,'technical_information_id','id');
    }

    public function employeesNumbers()
    {
        # code...
        return $this->hasMany(EmployeesNumber::class,'technical_information_id','id');
    }
}
