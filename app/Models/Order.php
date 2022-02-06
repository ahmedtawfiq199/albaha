<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'cildren_number',
        'current_job_name', 'current_job', 'hobbies', 'user_id','contact_detail_id'
    ];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function previousExperiences()
    {
        # code...
        return $this->hasMany(PreviousExperience::class,'order_id','id');
    }

    public function contactDetail()
    {
        # code...
        return $this->belongsTo(ContactDetail::class,'contact_detail_id','id');
    }

    public function contactDetailWithSomebody()
    {
        # code...
        return $this->hasOne(ContactDetailWithSomebody::class,'order_id','id');
    }

    public function guarantor()
    {
        # code...
        return $this->hasOne(Guarantor::class,'order_id','id');
    }

    public function projectInformation()
    {
        # code...
        return $this->hasOne(ProjectInformation::class,'order_id','id');
    }

    public function legalInformation()
    {
        # code...
        return $this->hasOne(LegalInformation::class,'order_id','id');
    }

    public function technicalInformation()
    {
        # code...
        return $this->hasOne(TechnicalInformation::class,'order_id','id');
    }

    public function marketInformation()
    {
        # code...
        return $this->hasOne(MarketInformation::class,'order_id','id');
    }


    public function environmentalInformation()
    {
        # code...
        return $this->hasOne(EnvironmentalInformation::class,'order_id','id');
    }

    public function questions()
    {
        # code...
        return $this->belongsToMany(Question::class,'order_questions','question_id','order_id')
                    ->using(OrderQuestion::class)
                    ->withPivot(['answer']);
    }

    public function generalRequirement()
    {
        # code...
        return $this->hasOne(GeneralRequirement::class,'order_id','id');
    }

    public function attachments()
    {
        # code...
        return $this->hasMany(Attachment::class,'order_id','id');
    }
}
