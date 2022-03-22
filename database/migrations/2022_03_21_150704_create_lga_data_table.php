<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLgaDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lga_data', function (Blueprint $table) {
            $table->id();
            $table->string('lga_chairman')->nullable();
            $table->integer('lga_population')->nullable();
            $table->float('lga_land_area')->nullable();
            $table->string('lga_distance_from_jos')->nullable();
            $table->longText('lga_minerals')->nullable();
            $table->longText('lga_produce')->nullable();
            $table->string('lga_festive_dates')->nullable();
            $table->longText('lga_opportunities')->nullable();
            $table->string('lga_attractions')->nullable();
            $table->foreignId('lga_id')->constrained()->onUpdate('cascade');
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
        Schema::dropIfExists('lga_data');
    }
}
