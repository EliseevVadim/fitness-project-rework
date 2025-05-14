<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveProblemZonesTable extends Migration
{
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::table('trainings', function (Blueprint $table) {
            $table->dropForeign(['problem_zone_id']);
            $table->dropColumn('problem_zone_id');
        });

        Schema::table('personal_accounts', function (Blueprint $table) {
            $table->dropForeign(['problem_zone_id']);
            $table->dropColumn('problem_zone_id');
        });

        Schema::dropIfExists('problem_zones');

        Schema::enableForeignKeyConstraints();
    }

    public function down()
    {
        //
    }
}
