<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('information')->nullable();
            $table->string('ev_id')->nullable();
            $table->string('property_subtype')->nullable();
            $table->string('year_of_construction')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('bethrooms')->nullable();
            $table->string('total_surface_approx')->nullable();
            $table->string('plot_surface_approx')->nullable();
            $table->string('parking')->nullable();
            $table->string('heating')->nullable();
            $table->string('underfloor_heating')->nullable();
            $table->string('gas_floor_type')->nullable();
            $table->string('fireplace')->nullable();
            $table->string('location')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information');
    }
}
