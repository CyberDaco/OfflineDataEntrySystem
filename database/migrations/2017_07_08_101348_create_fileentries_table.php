<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileentriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fileentries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_id')->unsigned()->unique();
            $table->string('filename');
            $table->string('mime');
            $table->string('original_filename');
            $table->string('status');
            $table->integer('operator_id')->unsigned();
            $table->string('application');
            $table->string('job_name');
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
        Schema::drop('fileentries');
    }
}
