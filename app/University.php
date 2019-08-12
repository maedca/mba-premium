<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class University extends Model implements AuthenticatableContract
{
    use Authenticatable;
    
    protected $fillable = [

        // Account Credentials
    
        'role',
        'status',
        'university_name',
        'email',
        'password',
    
        // Step 1 - University Info
    
        'event',
        'country',
        'city',
        'business_name',
        'website',
    
        // Representative Attending
    
        'first_name',
        'family_name',
        'office_phone',
        'mobile_phone',
        'whatsapp_phone',
    
        'participate_status',
        'participate_date',
        'description_programs',
        'programs_type',
        'class_profile',
        'degrees_offered'
    ];
}

