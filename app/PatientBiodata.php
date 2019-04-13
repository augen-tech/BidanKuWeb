<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientBiodata extends Model
{
    //
    protected $table= 'patient_biodatas';    
    
    protected $fillable =[
        'patient_id',
        'blood_type_id',
        'name',
        'birth_date',
        'birth_place',
        'pregnancy_count',
        'labor_count',
        'miscarriage_count',
        'premature_child_count',
        'born_died_count',
        'life_child_count',
        'last_child_age',
        'education',
        'religion',
        'occupation',
        'jkn_number',
        'address',
        'sub_district',
        'district',
        'family_phone_number',
    ];

    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
