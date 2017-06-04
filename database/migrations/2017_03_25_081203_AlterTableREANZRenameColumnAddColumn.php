<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableREANZRenameColumnAddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('reanzs', function (Blueprint $table) {
            $table->renameColumn('agent', 'first_agent_name');
            $table->renameColumn('agent_mobile', 'first_agent_mobile');
            $table->renameColumn('agent_id', 'first_agent_id');
            $table->renameColumn('agent_phone', 'first_agent_phone');
            $table->renameColumn('direct_dial', 'first_agent_direct');

            $table->renameColumn('agent1', 'second_agent_name');
            $table->renameColumn('agent_mobile1', 'second_agent_mobile');
            $table->string('second_agent_id');
            $table->string('second_agent_phone');
            $table->string('second_agent_direct');
            $table->string('agency_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reanzs', function (Blueprint $table) {
            $table->renameColumn('first_agent_name','agent');
            $table->renameColumn('first_agent_mobile','agent_mobile');
            $table->renameColumn('first_agent_id','agent_id');
            $table->renameColumn('first_agent_phone','agent_phone');
            $table->renameColumn('first_agent_direct','direct_dial');
            $table->renameColumn('second_agent_name','agent1');
            $table->renameColumn('second_agent_mobile','agent_mobile1');
            $table->dropColumn('second_agent_id');
            $table->dropColumn('second_agent_phone');
            $table->dropColumn('second_agent_direct');
            $table->dropColumn('agency_id');
        });
    }
}
