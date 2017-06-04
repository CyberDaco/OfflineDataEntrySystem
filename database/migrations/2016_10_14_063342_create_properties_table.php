<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property_type');
            $table->string('listing_type');
            $table->date('auction_date');
            $table->integer('price_from');
            $table->time('auction_time'); //5
            $table->integer('price_to'); 
            $table->string('auction_venue');
            $table->string('price_description');
            $table->integer('bedrooms');
            $table->integer('bathrooms'); //10
            $table->integer('lockup_garages');
            $table->integer('land_area');
            $table->string('land_area_metric');
            $table->integer('car_spaces');
            $table->integer('floor_area'); //15
            $table->integer('lounge_rooms');
            $table->integer('dining_rooms');
            $table->integer('study_rooms');
            $table->integer('family_rumpus');
            $table->integer('toilets'); //20
            $table->integer('ensuites');
            $table->integer('lounge_dining');
            $table->integer('other_rooms');
            $table->integer('total_floors');
            $table->integer('tennis_court'); //25
            $table->integer('year_built');  
            $table->integer('year_refurbished');
            $table->string('construction_type');
            $table->string('roof_material');
            $table->string('scenic_view_type'); //30
            $table->string('air_conditioned');
            $table->string('scenic_view');
            $table->string('ducted_heating');
            $table->string('lift_installed');
            $table->string('swimming_pool'); //35
            $table->string('access_security');
            $table->string('close_to_public');
            $table->string('water_frontage');
            $table->string('polished_floors');
            $table->string('canal_frontage'); //40
            $table->string('open_plan');
            $table->string('river_frontage');
            $table->string('renovated');
            $table->string('lake_frontage');
            $table->string('ducted_vacuum'); //45
            $table->string('coast_frontage');
            $table->string('double_storey');
            $table->string('fireplace');
            $table->string('boat_ramp');
            $table->string('selling_off'); //50
            $table->string('vendor_trade');
            $table->string('heritage_other');
            $table->string('granny_flat');
            $table->string('additional_property');
            $table->string('ad_size'); //55
            $table->string('ad_photo_type');
            $table->string('ad_photo_count');
            $table->string('ad_section');
            $table->string('ad_exclusive');
            $table->string('agent_contact'); //60
            $table->string('agent_name');
            $table->string('agent_firstname');
            $table->string('agent_lastname');
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
        Schema::drop('properties');
    }
}
