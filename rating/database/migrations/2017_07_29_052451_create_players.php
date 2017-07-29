<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('players', function (Blueprint $table) {
            $table->increments('player_num');
            $table->string('name', 50)->unique();
            $table->integer('age');
            $table->integer('height');
            $table->string('position', 30);
            $table->string('country', 50);
            $table->string('team', 50);
            $table->integer('appearance');
            $table->integer('shooting_accuracy%');
            $table->integer('goals');
            $table->integer('passing_accuracy%');
            $table->integer('assists');
            $table->integer('tackle');
            $table->integer('tackle_success%');
            $table->integer('yellow_card');
            $table->integer('red_card');
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
