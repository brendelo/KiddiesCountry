<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->string('aboutheader1');
            $table->text('aboutintro1');
            $table->string('aboutheader2');
            $table->text('aboutintro2');
            $table->string('aboutmainimage');
            $table->string('aboutsideimage');
            $table->string('aboutheader3');
            $table->text('aboutintro3');
            $table->string('aboutheader4');
            $table->text('aboutintro4');
            $table->string('aboutheader5');
            $table->text('aboutintro5');

            $table->string('aboutsideimage2');

            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
