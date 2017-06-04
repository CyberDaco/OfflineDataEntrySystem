<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state')->index();
            $table->string('unit_no')->index();
            $table->string('street_no')->index();
            $table->string('street_name')->index();
            $table->string('street_ext')->index();
            $table->string('street_direction')->index();
            $table->string('suburb')->index();
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
            $table->string('slug')->index();
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
        Schema::drop('home_prices');
    }
}
