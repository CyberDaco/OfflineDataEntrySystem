<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('application');
            $table->string('job_name')->index();
            $table->date('batch_date')->index(); 
            $table->integer('jobnumber')->index();
            $table->integer('records')->unsigned();
            $table->string('job_status');
            $table->string('remarks');
            $table->date('export_date')->nullable(); 
            $table->timestamps();
            $table->unique(array('job_name', 'batch_date'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('batches');
    }
}
