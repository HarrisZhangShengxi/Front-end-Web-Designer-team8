<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalkeepers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('goalkeepers', function (Blueprint $table) {
            $table->increments('gplayer_num');
            $table->string('name', 50)->unique();
            $table->integer('age');
            $table->integer('height');
            $table->string('country', 50);
            $table->string('team', 50);
            $table->integer('appearance');
            $table->integer('clean_sheets');
            $table->integer('goal_conceded');
            $table->integer('penalty_saves');
            $table->integer('distribution_accuracy');
            $table->integer('total_saves');
            $table->integer('total_clearances');
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
