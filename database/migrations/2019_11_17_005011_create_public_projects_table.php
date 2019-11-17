<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('stack')->nullable();
            $table->string('brief_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('url')->nullable();
            $table->string('github')->nullable();
            $table->string('image_url')->nullable();
            $table->tinyInteger('is_published')->default(1);
            $table->tinyInteger('display_order')->default(10);
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
        Schema::dropIfExists('public_projects');
    }
}
