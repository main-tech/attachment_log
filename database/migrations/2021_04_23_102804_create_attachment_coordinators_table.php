<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentCoordinatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachment_coordinators', function (Blueprint $table) {
            $table->timestamps();
			$table->string('passport_or_ID_number')->unique();
			$table->primary(['passport_or_ID_number']);
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email_address')->unique();
			$table->foreign('email_address')->references('email')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->string('phone_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachment_coordinators');
    }
}
