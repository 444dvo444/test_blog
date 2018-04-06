<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutPageLargoRusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_page_largo_rus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->nullable();
            $table->string('first_image_text')->nullable();
            $table->string('first_image')->nullable();
            $table->string('first_text')->nullable();
            $table->string('second_image_text')->nullable();
            $table->string('second_image')->nullable();
            $table->string('second_text')->nullable();
            $table->string('third_image')->nullable();
            $table->string('third_text')->nullable();
            $table->string('last_text')->nullable();
            $table->string('e&v_id')->nullable();
            $table->string('property_subtype')->nullable();
            $table->string('year_of_construction')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('total_surface_approx')->nullable();
            $table->string('plot_surface_approx')->nullable();
            $table->string('parking')->nullable();
            $table->string('heating')->nullable();
            $table->string('underfloor_heating')->nullable();
            $table->string('gas_floor_type')->nullable();
            $table->string('wooden_floor')->nullable();
            $table->string('fireplace')->nullable();
            $table->string('air_conditioning')->nullable();
            $table->string('other_information')->nullable();
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
        Schema::dropIfExists('about_page_largo_rus');
    }
}
