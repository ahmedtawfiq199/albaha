<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_name', 'partner_id_number', 'partner_ratio', 'legal_information_id'
    ];


    public function legalInformation()
    {
        # code...
        return $this->belongsTo(LegalInformation::class,'legal_information_id','id');
    }
}
