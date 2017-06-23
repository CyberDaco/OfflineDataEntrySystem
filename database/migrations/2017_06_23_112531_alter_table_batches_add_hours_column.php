<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableBatchesAddHoursColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('batches', function (Blueprint $table) {
            $table->time('hours')->nullable();
            $table->integer('export_user_id')->unsigned();
            $table->timestamp('exported_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('batches', function (Blueprint $table) {
            $table->dropColumn('hours');
            $table->dropColumn('export_user_id');
            $table->dropColumn('exported_at');
        });
    }
}
