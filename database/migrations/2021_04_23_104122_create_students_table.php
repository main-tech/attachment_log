<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
           $table->string('passport_or_ID_number')->unique();
			$table->primary(['passport_or_ID_number']);
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email_address')->unique();
		    $table->foreign('email_address')->references('email')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->string('phone_number');
			$table->string('registration_number');
			$table->string('school');
			$table->string('company_attached')->nullable(true);
			$table->string('course');
			$table->string('year_of_study');
			$table->string('study_level');
			 $table->timestamps();
			$table->string('attachment_type')->nullable(true);
		    $table->string('school_supervisor_ID')->nullable(true);
			$table->foreign('school_supervisor_ID')->references('passport_or_ID_number')->on('school_supervisors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
