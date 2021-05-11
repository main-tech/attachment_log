<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupervisorVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisor_visits', function (Blueprint $table) {
            $table->timestamps();
			$table->string('student_ID');
			$table->foreign('student_ID')->references('passport_or_ID_number')->on('students')->onDelete('cascade')->onUpdate('cascade');
			$table->string('school_supervisor_ID');
			$table->foreign('school_supervisor_ID')->references('passport_or_ID_number')->on('school_supervisors')->onDelete('restrict')->onUpdate('cascade');
            $table->text('supervisor_comments');
			$table->integer('nth_visit');
			$table->date('date_of_vist');
			

			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supervisor_visits');
    }
}
