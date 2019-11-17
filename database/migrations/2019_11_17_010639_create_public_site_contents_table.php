<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicSiteContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_site_contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lander_title')->nullable();
            $table->string('lander_subtitle')->nullable();
            $table->string('lander_location')->nullable();
            $table->string('location_link')->nullable();
            $table->text('lander_blurb')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_subtitle')->nullable();
            $table->text('about_description')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_github')->nullable();
            $table->string('contact_location')->nullable();
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
        Schema::dropIfExists('public_site_contents');
    }
}
