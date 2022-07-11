<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveProblemZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trainings', function (Blueprint $table) {
            $table->dropIndex(['problem_zone_id']);
            $table->dropColumn(['problem_zone_id']);
        });
        Schema::table('personal_accounts', function (Blueprint $table) {
            $table->dropColumn(['problem_zone_id']);
        });
        Schema::dropIfExists('problem_zones');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
