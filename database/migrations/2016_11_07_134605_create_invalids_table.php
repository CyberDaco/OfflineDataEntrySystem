<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvalidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invalids', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('batch_id')->unsigned();
            $table->string('batch_name')->index();
            $table->string('page_no');
            $table->string('unit_no')->index();
            $table->string('street_no')->index();
            $table->string('street_no_suffix')->index();
            $table->string('street_name')->index();
            $table->string('street_extension')->index();
            $table->string('street_direction')->index();
            $table->string('suburb')->index();
            $table->string('state');
            $table->integer('post_code')->index()->unsigned();
            $table->string('property_type');
            $table->string('multiple_properties');
            $table->string('sale_rent');
            
            $table->string('listing_type');
            $table->date('auction_date')->nullable();
            $table->integer('price_from')->nullable();
            $table->time('auction_time')->nullable();
            $table->integer('price_to')->nullable();
            $table->string('auction_venue');
            $table->string('price_description');
            
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('lockup_garages');
            $table->char('air_conditioned',1);
            $table->char('swimming_pool',1);
            $table->char('close_to_public',1);
            
            $table->string('ad_size');
            $table->string('ad_photo_type');
            $table->string('ad_photo_count');
            $table->string('ad_section');
            $table->string('ad_exclusive');
            
            $table->integer('invalids_id')->index()->unsigned();
            $table->string('agent_contact')->index();
            $table->string('agency_name');
            $table->string('agent_firstname');
            $table->string('agent_lastname');
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
        Schema::drop('invalids');
    }
}
