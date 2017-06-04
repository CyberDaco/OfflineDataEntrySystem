<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAUNewsPropertyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('au_news_property_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('au_news_addresses_id')->index()->unsigned();
            $table->string('listing_type');
            $table->date('auction_date')->nullable();
            $table->integer('price_from')->nullable();
            $table->time('auction_time')->nullable(); //5
            $table->integer('price_to')->nullable();
            $table->string('auction_venue');
            $table->string('price_description');
            $table->string('rental_period');
            $table->string('bedrooms');
            $table->string('bathrooms'); //10
            $table->string('lockup_garages');
            $table->decimal('land_area',10,2)->nullable();
            $table->string('land_area_metric');
            $table->string('car_spaces');
            $table->integer('floor_area')->nullable(); //15
            $table->integer('lounge_rooms')->nullable();
            $table->integer('dining_rooms')->nullable();
            $table->integer('study_rooms')->nullable();
            $table->integer('family_rumpus')->nullable();
            $table->integer('toilets')->nullable(); //20
            $table->integer('ensuites')->nullable();
            $table->integer('lounge_dining')->nullable();
            $table->integer('other_rooms')->nullable();
            $table->integer('total_floors')->nullable();
            $table->integer('tennis_court')->nullable(); //25
            $table->integer('year_built')->nullable();
            $table->integer('year_refurbished')->nullable();
            $table->string('construction_type');
            $table->string('roof_material');
            $table->string('scenic_view_type'); //30
            $table->char('air_conditioned',1);
            $table->char('scenic_view',1);
            $table->char('ducted_heating',1);
            $table->char('lift_installed',1);
            $table->char('swimming_pool',1); //35
            $table->char('access_security',1);
            $table->char('close_to_public',1);
            $table->char('water_frontage',1);
            $table->char('polished_floors',1);
            $table->char('canal_frontage',1); //40
            $table->char('open_plan',1);
            $table->char('river_frontage',1);
            $table->char('renovated',1);
            $table->char('lake_frontage',1);
            $table->char('ducted_vacuum',1); //45
            $table->char('coast_frontage',1);
            $table->char('double_storey',1);
            $table->char('fireplace',1);
            $table->char('boat_ramp',1);
            $table->char('selling_off',1); //50
            $table->char('vendor_trade',1);
            $table->char('heritage_other',1);
            $table->char('granny_flat',1);
            $table->string('additional_property');
            $table->string('ad_size'); //55
            $table->string('ad_photo_type');
            $table->string('ad_photo_count');
            $table->string('ad_section');
            $table->string('ad_exclusive'); //59
            $table->integer('floor_level')->nullable();
            $table->integer('floor_level_inside')->nullable();
            $table->char('electricity',1);
            $table->char('sealed_roads',1);
            $table->char('town_water',1);
            $table->char('town_sewerage',1);
            $table->char('curb_channel',1);
            $table->char('all_weather',1);
            $table->char('flooding',1);
            $table->char('phone_service',1);
            $table->char('subdivision',1);
            $table->char('trees',1);
            $table->char('permanent_water',1);
            $table->timestamps();
            
            $table->foreign('au_news_addresses_id')
                  ->references('id')->on('au_news_addresses')
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
        Schema::drop('au_news_property_details');
    }
}
