<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecentSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recent_sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_id')->unsigned();
            $table->string('batch_name')->index();
            $table->integer('listing_id')->index();
            $table->string('state');
            $table->string('unit_no');
            $table->string('street_no');
            $table->string('street_no_suffix');
            $table->string('street_name');
            $table->string('street_ext');
            $table->string('street_direction');
            $table->string('suburb');
            $table->integer('post_code')->nullable();
            $table->string('property_type');
            $table->string('sale_type');
            $table->string('sold_price');
            $table->date('contract_date')->nullable();
            $table->date('settlement_date')->nullable();
            $table->string('agency_name');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('car');
            $table->string('status');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('batch_id')
                  ->references('id')->on('batches')
                  ->onDelete('cascade');
            
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recent_sales');
    }
}
