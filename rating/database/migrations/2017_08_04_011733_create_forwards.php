<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForwards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('forwards', function (Blueprint $table) {
            $table->increments('fplayer_num');
            $table->string('name', 50)->unique();
            $table->integer('age');
            $table->integer('height');
            $table->string('country', 50);
            $table->string('team', 50);
            $table->integer('appearance');
            $table->string('shooting_accuracy');
            $table->integer('goals');
            $table->string('passing_accuracy');
            $table->integer('assists');
            $table->integer('foul_conceded');
            $table->string('tackles');
            $table->integer('yellow/red_card');
            $table->rememberToken();
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
        //
    }
}
