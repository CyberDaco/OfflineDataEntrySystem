<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReanzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reanzs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('batch_id')->unsigned();
            $table->string('batch_name')->index();
            $table->string('state');
            $table->integer('listing_id')->index()->nullable();
            $table->string('property_id');
            $table->date('list_date');
            $table->string('site_area');
            $table->date('scrape_date')->nullable();
            $table->string('url');
            $table->string('property_address');
            $table->string('unit_no');
            $table->string('st_no_pref');
            $table->string('street_no');
            $table->string('st_no_suffix');
            $table->string('street_name');
            $table->string('street_type');
            $table->string('quadrant');
            $table->string('suburb');
            $table->string('city');
            $table->string('price_guide');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('car_spaces');
            $table->string('sale_method');
            $table->string('auction_day');
            $table->time('auction_time')->nullable();
            $table->date('auction_date')->nullable();
            $table->string('land_size');
            $table->string('floor_size');
            $table->string('agency_name');
            $table->string('agent'); // change to agent_name1
            $table->string('agent1');
            $table->string('agent_mobile');
            $table->string('agent_mobile1');
            $table->string('agent_id');
            $table->string('agent_phone');
            $table->string('direct_dial');
            $table->integer('photo_count')->nullable();
             
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
        Schema::drop('reanzs');
    }
}
