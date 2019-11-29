<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsanaChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asana_channels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('auth_token')->nullable();
            $table->text('description')->nullable();
            $table->text('fields')->nullable();
            $table->bigInteger('workspace_gid')->nullable();
            $table->bigInteger('project_gid')->nullable();
            $table->bigInteger('section_gid')->nullable();
            $table->bigInteger('assignee_gid')->nullable();
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
        Schema::dropIfExists('asana_channels');
    }
}
