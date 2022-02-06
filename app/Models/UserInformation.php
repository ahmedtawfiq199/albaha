<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_number','date_of_birth','address','social_status',
        'age', 'city', 'no_civil_registry', 'educational_qualification','scientific_specialization',
        'job', 'nationality','user_id','hand_graduation'
    ];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class,'user_id','id');
    }
}
