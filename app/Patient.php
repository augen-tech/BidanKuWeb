<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $fillable =[
        'email',
        'phone_number',
        'password',
        
        
    ];
    // public function registrations()
    // {
    //     return $this->hasMany(Registration::class);
    // }
    
}