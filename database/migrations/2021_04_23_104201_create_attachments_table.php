<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->string('student_ID');
			$table->foreign('student_ID')->references('passport_or_ID_number')->on('students')->onDelete('cascade')->onUpdate('cascade');
			$table->string('company_attached');
			$table->string('industry_supervisor_ID');
			$table->foreign('industry_supervisor_ID')->references('passport_or_ID_number')->on('industry_supervisors')->onDelete('restrict')->onUpdate('cascade');
            $table->date('start_date');
			$table->date('end_date');
			$table->string('attachment_type');
			$table->string('company_county_location');
			$table->boolean('whether_working_remotely');
	   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
}
