<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelperBiodata extends Model
{
    protected $table= 'helper_biodatas';    
    
    protected $fillable =[
        'helper_id',
        'name',
        'birth_date',
        'birth_place'
                      
    ];

    public function helper(){
        return $this->belongsTo(Helper::class);
    }
}
