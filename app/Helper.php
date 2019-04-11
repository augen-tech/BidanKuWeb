<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
     //
     protected $table= 'helpers';
    

     protected $fillable =[
         'email',
         'phone_number',
         'password',                
     ];
   
}
