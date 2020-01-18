<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBDFIVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_d_f_i_visitors', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('user_name')->nullable();
			$table->string('user_email')->nullable();
			$table->string('user_phone')->nullable();
			$table->string('user_business_name')->nullable();
			$table->string('user_business_address')->nullable();
			$table->string('ip_address')->nullable();
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
        Schema::dropIfExists('b_d_f_i_visitors');
    }
}
