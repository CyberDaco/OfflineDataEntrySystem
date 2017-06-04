<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('batch_name')->index();
            $table->integer('batch_id')->unsigned();
            $table->integer('record_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('jobnumber_id')->unsigned();
            $table->string('action');
            $table->timestamp('end');
            $table->timestamp('start');
            $table->timestamps();
            
            $table->foreign('batch_id')
                  ->references('id')->on('batches')
                  ->onDelete('cascade');
            
            $table->foreign('jobnumber_id')
                  ->references('id')->on('job_numbers'); 
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entry_logs');
    }
}
