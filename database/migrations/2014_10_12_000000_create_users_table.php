<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            // Session Data
            
            $table->increments('id');
            $table->string('role')->default('student');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            $table->boolean('status')->default(0);
            
            // Personal Data
            
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('dni_type')->nullable();
            $table->string('dni')->nullable();
            $table->string('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('nationality')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('alt_email')->nullable();

            // Job Data            
            
            $table->integer('years_labo')->nullable();
            $table->string('employeer')->nullable();
            $table->string('function')->nullable();
            $table->string('industry')->nullable();
            $table->string('alt_industry')->nullable();
            $table->string('job_title')->nullable();

            // Studies Data

            $table->string('university')->nullable();
            $table->string('career')->nullable();
            $table->integer('gpa')->nullable();
            $table->integer('from_gpa')->nullable();
            $table->integer('to_gpa')->nullable();
            $table->date('date_grade')->nullable();
            $table->string('grade_honor')->nullable();

            $table->string('post_university')->nullable();
            $table->string('postgrade_degree')->nullable();
            $table->date('postgrade_date')->nullable();
            $table->string('postgrade_specialization')->nullable();
            $table->integer('post_from_gpa')->nullable();
            $table->integer('post_to_gpa')->nullable();
            $table->string('post_honor')->nullable();
            
            //  GMAT and GRE examns Data
            
            $table->date('mba_date')->nullable();
            $table->string('gmat_confirmation')->nullable();
            $table->date('gmat_month')->nullable();
            $table->integer('gmat_global_score')->nullable();
            $table->integer('gmat_global_percent')->nullable();
            $table->integer('gmat_essay_score')->nullable();
            $table->integer('gmat_essay_percent')->nullable();
            $table->integer('gmat_verbal_score')->nullable();
            $table->integer('gmat_verbal_percent')->nullable();
            $table->integer('gmat_math_score')->nullable();
            $table->integer('gmat_math_percent')->nullable();
            $table->integer('gmat_reasoning_score')->nullable();
            $table->integer('gmat_reasoning_percent')->nullable();
            $table->string('gre_confirmation')->nullable();
            $table->date('gre_month')->nullable();
            $table->integer('gre_global_score')->nullable();
            $table->integer('gre_global_percent')->nullable();
            $table->integer('gre_essay_score')->nullable();
            $table->integer('gre_essay_percent')->nullable();
            $table->integer('gre_verbal_score')->nullable();
            $table->integer('gre_verbal_percent')->nullable();
            $table->integer('gre_math_score')->nullable();
            $table->integer('gre_math_percent')->nullable();
            $table->integer('toefl_score')->nullable();
            $table->integer('ielts_score')->nullable();

            // MBA Data

            $table->string('mba_type')->nullable();
            $table->integer('mba_duration')->nullable();

            // MBA Specialization

            $table->boolean('entrepreneurship')->nullable();
            $table->boolean('finance')->nullable();
            $table->boolean('marketing')->nullable();
            $table->boolean('general_management')->nullable();
            $table->boolean('logistics')->nullable();
            $table->boolean('accounting')->nullable();
            $table->boolean('other')->nullable();
            $table->string('other_which')->nullable();

            $table->string('other_studies')->nullable();
            $table->string('area')->nullable();

            // Finance 

            $table->boolean('bank_loan')->nullable();
            $table->boolean('colfuturo')->nullable();
            $table->boolean('prodigy_finance')->nullable();
            $table->boolean('icetex')->nullable();
            $table->boolean('personal_funding')->nullable();
            $table->boolean('scholarship')->nullable();
            $table->boolean('university_loan')->nullable();
            
            // CV & notes
            
            $table->string('cv')->nullable();
            $table->text('notes')->nullable();

            // University Info

            $table->string('event_sao')->nullable();
            $table->string('event_lima')->nullable();
            $table->string('event_bogota')->nullable();
            $table->string('website')->nullable();

            // Representative Attending

            $table->string('representative_first_name')->nullable();
            $table->string('representative_family_name')->nullable();
            $table->string('representative_email')->nullable();
            $table->string('representative_mobile_phone')->nullable();
            $table->string('representative_home_phone')->nullable();
            $table->string('representative_whatsapp_phone')->nullable();

            // Contact Person

            $table->string('contact_first_name')->nullable();
            $table->string('contact_family_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_mobile_phone')->nullable();
            $table->string('contact_home_phone')->nullable();
            $table->string('contact_whatsapp_phone')->nullable();

            
            // Additional Info

            // --Cultura Activity

            $table->string('sao_paulo_panel')->nullable();
            $table->string('bogota_panel')->nullable();
            $table->string('lima_panel')->nullable();
            $table->string('cultural_tour')->nullable();

            $table->text('description_mba_programs')->nullable();
            $table->text('programs_type')->nullable();
            $table->text('class_profile_mba')->nullable();
            $table->string('join_degrees_offered')->nullable();
            $table->text('specialized_masters')->nullable();
            $table->text('specialization_concentration')->nullable();

            $table->integer('program_duration')->nullable();
            $table->integer('tuition_fees')->nullable();
            $table->string('tuition_type')->nullable();
            $table->integer('minimun_experience')->nullable();
            $table->integer('students_employed')->nullable();
            $table->string('languare_required')->nullable();
            $table->string('financial_aid')->nullable();
            $table->string('students_loans_cosigner')->nullable();
            $table->text('facebook_posts')->nullable();
            $table->string('business_logo')->nullable();
                        
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
