<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('f_team_id')->unsigned()->comment('first player');
            $table->bigInteger('s_team_id')->unsigned()->comment('second player');
            $table->bigInteger('match_week_id')->unsigned();
            $table->bigInteger('winner_id')->unsigned()->nullable();
            $table->tinyInteger('f_player_gaols')->default(0);
            $table->tinyInteger('s_player_gaols')->default(0);
            $table->boolean('draw')->default(false);
            $table->timestamps();

            $table->foreign('f_team_id')->references('id')->on('teams')->onUpdate('cascade')->onDelete('RESTRICT');
            $table->foreign('s_team_id')->references('id')->on('teams')->onUpdate('cascade')->onDelete('RESTRICT');
            $table->foreign('match_week_id')->references('id')->on('match_weeks')->onUpdate('cascade')->onDelete('RESTRICT');
            $table->foreign('winner_id')->references('id')->on('teams')->onUpdate('cascade')->onDelete('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
