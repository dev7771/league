<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_results', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('team_id')->unsigned();
            $table->bigInteger('match_week_id')->unsigned();
            $table->tinyInteger('points')->default(0);
            $table->tinyInteger('played')->default(0);
            $table->tinyInteger('won')->default(0);
            $table->tinyInteger('draw')->default(0);
            $table->tinyInteger('lost')->default(0);
            $table->tinyInteger('gf')->default(0);
            $table->tinyInteger('ga')->default(0);
            $table->tinyInteger('gd')->default(0);
            $table->timestamps();


            $table->foreign('team_id')->references('id')->on('teams')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('match_week_id')->references('id')->on('match_weeks')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_results');
    }
}
