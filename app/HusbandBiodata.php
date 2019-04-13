<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HusbandBiodata extends Model
{
    //
    protected $table= 'husband_biodatas';
    

    protected $fillable =[
        'husband_id',
        'name',
        'birth_data',
        'birth_place',
        'blood_type_id',
        'education',
        'religion',
        'occupation',                
    ];
}
