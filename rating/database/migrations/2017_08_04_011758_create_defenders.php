<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefenders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('defenders', function (Blueprint $table) {
            $table->increments('dplayer_num');
            $table->string('name', 50)->unique();
            $table->integer('age');
            $table->integer('height');
            $table->string('country', 50);
            $table->string('team', 50);
            $table->integer('appearance');
            $table->integer('shooting_accuracy%');
            $table->integer('goals');
            $table->integer('goal_conceded');
            $table->integer('interceptions');
            $table->integer('total_clearances');
            $table->integer('tackle_success');
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
