<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('team_num');
            $table->string('name', 50)->unique();
            $table->string('shooting_accuracy');
            $table->integer('goals');
            $table->string('passing_accuracy');
            $table->integer('assists');
            $table->integer('save');
            $table->string('tackle_success');
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
