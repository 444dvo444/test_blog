<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuRusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_rus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('about');
            $table->string('location');
            $table->string('architecture');
            $table->string('gallery');
            $table->string('equipment');
            $table->string('select_villas');
            $table->string('contact_us');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_rus');
    }
}
