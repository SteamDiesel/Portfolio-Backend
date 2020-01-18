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
            $table->string('key')->unique();
            $table->string('title');
            $table->text('auth_token');
            $table->text('description');
            $table->string('workspace_gid');
            $table->text('fields')->nullable();
            $table->string('project_gid')->nullable();
            $table->string('section_gid')->nullable();
            $table->string('assignee_gid')->nullable();
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
