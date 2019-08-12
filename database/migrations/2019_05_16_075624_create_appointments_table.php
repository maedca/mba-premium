<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status', ['assigned', 'accepted', 'rejected', 'expired'])->default('assigned');
            $table->datetime('date');
            $table->unsignedInteger('university_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->softDeletes();

            /*$table->foreign('user_id')->references('id')->on('users');
            $table->foreign('university_id')->references('id')->on('users');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
