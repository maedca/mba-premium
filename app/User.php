<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Authenticatable
{
    use Notifiable;    

    protected $fillable = [

        // Register

        'role',
        'status',
        'first_name',
        'last_name',
        'dni_type',
        'dni',
        'mobile_phone',
        'email',
        'password',

        // Personal

        'gender',
        'birth_date',
        'nationality',
        'city',
        'home_phone',
        'office_phone',
        'alt_email',
        'country',

        // Laboring

        'years_labo',
        'employeer',
        'function',
        'industry',
        'alt_industry',
        'job_title',

        // Studies

        'university',
        'career',
        'gpa',
        'date_grade',
        'grade_honour',
        'post_university',
        'postgrade_degree',
        'postgrade_date',
        'postgrade_specialization',
        'post_gpa',
        'post_honour',

        // Test

        'mba_date',
        'gmat_confirmation',
        'gmat_month',
        'gmat_global_score',
        'gmat_global_percent',
        'gmat_essay_score',
        'gmat_essay_percent',
        'gmat_verbal_score',
        'gmat_verbal_percent',
        'gmat_math_score',
        'gmat_math_percent',
        'gmat_reasoning_score',
        'gmat_reasoning_percent',
        'gre_confirmation',
        'gre_month',
        'gre_global_score',
        'gre_global_percent',
        'gre_essay_score',
        'gre_essay_percent',
        'gre_verbal_score',
        'gre_verbal_percent',
        'gre_math_score',
        'gre_math_percent',
        'gre_reasoning_score',
        'gre_reasoning_percent',
        'toefl_score',
        'ielts_score',

        // MBA
        
        'mba_type',
        'mba_duration',

        // CV

        'cv',

        // Event
        
        'event',

        // University Info

        'website',

        // Representative Attending

        'representative_first_name',
        'representative_family_name',
        'representative_position',
        'representative_email',
        'representative_mobile_phone',
        'representative_home_phone',
        'representative_whatsapp_phone',
        
        // Contact Person

        'contact_first_name',
        'contact_family_name',
        'contact_position',
        'contact_email',
        'contact_mobile_phone',
        'contact_home_phone',
        'contact_whatsapp_phone',

        // Cultura Activity

        'sao_paulo_panel',
        'bogota_panel',
        'lima_panel',
        'cultural_tour',

        // Additional Info

        'description_mba_programs',
        'programs_type',
        'class_profile_mba',
        'join_degrees_offered',
        'specialized_masters',
        'specialization_concentration',

        'program_duration',
        'tuition_fees',
        'tuition_type',
        'minimun_experience',
        'students_employed',
        'languare_required',
        'ability_loans',
        'financial_aid',
        'business_logo',
        
        'university_notes',
        'uni_choice'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	public function appointment()
	{
		return $this->hasMany(Appointment::class);
	}

    public function appointment_assigned()
    {
        return $this->hasMany(Appointment::class, 'university_id');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
