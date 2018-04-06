<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title')->nullable();
            $table->string('top_text')->nullabel();
            $table->string('first_image')->nullabel();
            $table->string('second_text')->nullabel();
            $table->string('point_ico_one')->nullabel();
            $table->string('point_ico_two')->nullabel();
            $table->string('point_ico_three')->nullabel();
            $table->string('point_ico_four')->nullabel();
            $table->string('point_ico_five')->nullabel();
            $table->string('point_ico_six')->nullabel();
            $table->string('point_text_one')->nullabel();
            $table->string('point_text_two')->nullabel();
            $table->string('point_text_three')->nullabel();
            $table->string('point_text_five')->nullabel();
            $table->string('point_text_six')->nullabel();
            $table->string('third_text')->nullabel();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
