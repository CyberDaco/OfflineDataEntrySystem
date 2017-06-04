<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAUNewsAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('au_news_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_id')->unsigned();
            $table->string('batch_name')->index();
            $table->string('listing_id')->index();
            $table->string('page_no');
            $table->string('unit_no')->index();
            $table->string('street_no')->index();
            $table->string('street_no_suffix')->index();
            $table->string('street_name')->index();
            $table->string('street_extension')->index();
            $table->string('street_direction')->index();
            $table->string('suburb')->index();
            $table->integer('post_code')->unsigned()->nullable();
            $table->string('property_type');
            $table->string('state');
            $table->string('sale_rent');
            $table->string('status');
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
        Schema::drop('au_news_addresses');
    }
}
