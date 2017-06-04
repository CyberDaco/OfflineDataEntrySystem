<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAUNewsAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('au_news_agencies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('au_news_addresses_id')->index()->unsigned();
            $table->string('agent_contact')->index();
            $table->string('agency_name');
            $table->string('agent_firstname');
            $table->string('agent_lastname');
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
        Schema::drop('au_news_agencies');
    }
}
