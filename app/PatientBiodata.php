<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientBiodata extends Model
{
    //
    protected $table= 'patient_biodatas';    
    
    protected $fillable =[
        'name',
        'birth_date',
        'birth_place',
        'pregnancy_count',
        'last_child_age',
        'life_child_count',
        'religion',
        'education',
        'blood_type_id',
        'occupation',
        'jkn_number',
        'address',
        'district',
        'sub_district'                
    ];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
