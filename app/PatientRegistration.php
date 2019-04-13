<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientRegistration extends Model
{
    //
    protected $table= 'patient_registrations';
    
    
    protected $fillable =[
        'id',
        'patient_id',
        'helper_id',
        'kohort_number',
        'kia_book_receive_date',
                              
    ];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
    public function helper(){
        return $this->belongsTo(Helper::class);
    }
}
