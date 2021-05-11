<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_reports', function (Blueprint $table) {
            $table->timestamps();
			$table->date('week_beginning_date');
			$table->date('weeek_day_date');
			$table->text('work_done');
			$table->string('student_ID');
			$table->unsignedBigInteger('wkly_rprt_id');
			$table->foreign('student_ID')->references('passport_or_ID_number')->on('students')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('wkly_rprt_id')->references('id')->on('weekly_reports')->onDelete('cascade')->onUpdate('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_reports');
    }
}
