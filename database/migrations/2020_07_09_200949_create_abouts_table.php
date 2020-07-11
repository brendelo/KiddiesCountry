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
            $table->string('aboutheader1')->nullable();
            $table->text('aboutintro1')->nullable();
            $table->string('aboutheader2')->nullable();
            $table->text('aboutintro2')->nullable();
            $table->string('aboutmainimage')->nullable();
            $table->string('aboutsideimage')->nullable();
            $table->string('aboutheader3')->nullable();
            $table->text('aboutintro3')->nullable();
            $table->string('aboutheader4')->nullable();
            $table->text('aboutintro4')->nullable();
            $table->string('aboutheader5')->nullable();
            $table->text('aboutintro5')->nullable();

            $table->string('aboutsideimage2')->nullable();

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
