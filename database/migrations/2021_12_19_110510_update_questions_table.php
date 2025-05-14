<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            if (!Schema::hasColumn('questions', 'topic_id')) {
                $table->foreignId('topic_id')
                    ->nullable() // или без nullable, если обязательно
                    ->constrained()
                    ->cascadeOnUpdate();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            if (Schema::hasColumn('questions', 'topic_id')) {
                $table->dropForeign(['topic_id']);
                $table->dropColumn('topic_id');
            }
        });
    }
}
