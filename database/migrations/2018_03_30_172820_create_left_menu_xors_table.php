<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeftMenuXorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('left_menu_xors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('book_call');
            $table->string('select_villas');
            $table->string('presentation_of_villas');
            $table->string('villa_largo');
            $table->string('villa_allergo');
            $table->string('villa_vivo');
            $table->string('architecture');
            $table->string('interior_design');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('left_menu_xors');
    }
}
