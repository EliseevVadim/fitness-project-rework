<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTrainingAndMenuIdsFromMarathonAndProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marathon_and_programs', function (Blueprint $table) {
            $table->dropForeign(['menu_id']);
            $table->dropForeign(['training_id']);
            $table->dropColumn('menu_id');
            $table->dropColumn('training_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marathon_and_programs', function (Blueprint $table) {
            //
        });
    }
}
