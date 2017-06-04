<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_number');
            $table->string('application');
            $table->string('section');
            $table->date('current_month');
            $table->date('job_date');
            $table->string('stats_output');
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
        Schema::drop('job_numbers');
    }
}
