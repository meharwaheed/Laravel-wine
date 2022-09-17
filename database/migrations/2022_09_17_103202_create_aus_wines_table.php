<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aus_wines', function (Blueprint $table) {
            $table->id();
            $table->string('wineName');
            $table->string('wineType');
            $table->integer('winePrice');
            $table->integer('wineQuantity');
            $table->string('wineRegion');
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
        Schema::dropIfExists('aus_wines');
    }
};
