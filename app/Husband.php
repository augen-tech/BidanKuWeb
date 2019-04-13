<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Husband extends Model
{
    //
    protected $table= 'husbands';
    

    protected $fillable =[
        'patient_id',
        'email',
        'phone_number',
        'password',                
    ];
}
