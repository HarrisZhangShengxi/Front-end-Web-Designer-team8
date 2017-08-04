<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('players_rating', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_num');
            $table->string('position', 20);
            $table->integer('skills');
            $table->integer('phyical');
            $table->integer('attack');
            $table->integer('defence');
            $table->integer('weak_foot');
            $table->integer('team_play');
            $table->string('comment', 5000);
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
