<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeklyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly_reports', function (Blueprint $table) {
			$table->id();
            $table->timestamps();
			$table->string('student_ID');
			$table->foreign('student_ID')->references('passport_or_ID_number')->on('students')->onDelete('cascade')->onUpdate('cascade');
			$table->text('student_report');
			$table->text('industy_supervisor_comments');
			$table->date('week_ending_date');
			$table->date('student_weekly_report_submit_date');
			$table->date('industry_supervisor_comment_date');
			$table->string('industry_supervisor_ID')->nullable(true);
			$table->foreign('industry_supervisor_ID')->references('passport_or_ID_number')->on('industry_supervisors')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weekly_reports');
    }
}
