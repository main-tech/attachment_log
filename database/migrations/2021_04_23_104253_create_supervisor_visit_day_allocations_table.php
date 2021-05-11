<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupervisorVisitDayAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisor_visit_day_allocations', function (Blueprint $table) {
           
            $table->timestamps();
			$table->string('cdn_ID');
			$table->string('school_supervisor_ID');
			$table->string('student_ID');
			$table->date('school_supervisr_visit_date');
			$table->foreign('cdn_ID')->references('passport_or_ID_number')->on('attachment_coordinators')->onDelete('restrict')->onUpdate('cascade');
		    $table->foreign('school_supervisor_ID')->references('passport_or_ID_number')->on('school_supervisors')->onDelete('restrict')->onUpdate('cascade');
			$table->foreign('student_ID')->references('passport_or_ID_number')->on('students')->onDelete('cascade')->onUpdate('cascade');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supervisor_visit_day_allocations');
    }
}
