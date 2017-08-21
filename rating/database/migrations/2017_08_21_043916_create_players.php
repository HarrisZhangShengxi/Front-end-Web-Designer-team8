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
            $table->increments('player_id');
            $table->string('name', 50)->unique();
            $table->integer('age');
            $table->integer('height');
            $table->string('country', 50);
            $table->string('team', 50);
            $table->string('position', 50);
            $table->integer('appearance');
            $table->string('shooting_accuracy');
            $table->integer('goals');
            $table->integer('goal_conceded');
            $table->integer('interceptions');
            $table->integer('total_clearances');
            $table->integer('clean_sheets');
            $table->integer('total_saves');
            $table->integer('penalty_saves');
            $table->integer('distribution_accuracy');
            $table->string('passing_accuracy');
            $table->integer('assists');
            $table->integer('foul_conceded');
            $table->integer('tackles');
            $table->string('tackle_success');
            $table->integer('yellow_red_card');
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
