<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustrySupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industry_supervisors', function (Blueprint $table) {
              $table->timestamps();
			$table->string('passport_or_ID_number')->unique();
			$table->primary(['passport_or_ID_number']);
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email_address')->unique();
			$table->foreign('email_address')->references('email')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->string('company');
			$table->string('phone_number');
			$table->string('company_email')->nullable(true);
			$table->string('company_box_number')->nullable(true);
			$table->string('organization_chart_image_link')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('industry_supervisors');
    }
}
