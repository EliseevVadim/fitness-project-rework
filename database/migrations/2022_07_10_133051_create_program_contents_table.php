<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_contents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('training_location_id');
            $table->unsignedBigInteger('menu_calories_id');
            $table->string('google_drive_link');
            $table->timestamps();
            $table->foreign('training_location_id')
                ->references('id')
                ->on('training_locations')
                ->cascadeOnUpdate();
            $table->foreign('menu_calories_id')
                ->references('id')
                ->on('menu_calories')
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_contents');
    }
}
