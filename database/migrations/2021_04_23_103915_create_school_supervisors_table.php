<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolSupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_supervisors', function (Blueprint $table) {
         	 $table->timestamps();
			$table->string('passport_or_ID_number')->unique();
			$table->primary(['passport_or_ID_number']);
			$table->string('first_name');
			$table->string('coordinator_ID')->nullable(true);
			$table->foreign('coordinator_ID')->references('passport_or_ID_number')->on('attachment_coordinators')->onDelete('set null')->onUpdate('set null');
			$table->string('last_name');
			$table->string('email_address')->unique();
			$table->foreign('email_address')->references('email')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->string('phone_number');
			$table->string('school');
			$table->string('department');
			$table->string('department_email')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_supervisors');
    }
}
