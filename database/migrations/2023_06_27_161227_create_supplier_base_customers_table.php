<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierBaseCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_base_customers', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->unsignedBigInteger('supplier_base_id');
            $table->foreign('supplier_base_id')
                ->references('id')
                ->on('supplier_bases')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
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
        Schema::dropIfExists('supplier_base_customers');
    }
}
