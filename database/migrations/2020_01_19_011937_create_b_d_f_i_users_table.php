<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBDFIUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_d_f_i_users', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('session_uuid')->unique()->index();
			$table->string('email')->nullable();
			$table->string('first_name')->nullable();
			$table->string('surname')->nullable();
			$table->string('country')->nullable();
			$table->string('phone_number')->nullable();
			$table->string('business_name')->nullable();
			$table->string('role')->nullable();
			$table->string('business_address')->nullable();
			$table->string('brand_image_url')->nullable();
			$table->string('email_image_url')->nullable();
			$table->tinyInteger('show_copy_button')->nullable();
			$table->tinyInteger('confirm_delete_prompts')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('b_d_f_i_users');
    }
}
