<?php

namespace App\Services;


use App\Models\Team;
use App\Models\Match;
use App\Models\TeamResult;


class MatchService {



	   public $teams;
	   public $week;

	   public function __construct($week) { 


		$this->teams = Team::active()->get();
		$this->week  = $week;
		$this->make();
	   }



	   public function make() {


		$cnt = count($this->teams->toArray())/2;

		$teams = $this->teams->pluck('id');

		for ($i=0; $i <$cnt ; $i++) { 

			$match = new Match;
			$match->f_team_id 	   = $teams->pop();
			$match->s_team_id 	   = $teams->pop();
			$match->match_week_id  = $this->week;
			$match->f_player_gaols = rand(0,10);
			$match->s_player_gaols = rand(0,10);
			$match->draw 		   = $match->f_player_gaols == $match->s_player_gaols ? true : false;
			$match->winner_id 	   = ($match->draw == false) ? ($match->f_player_gaols > $match->s_player_gaols  ? $match->f_team_id : $match->s_team_id ):null;
			$match->save();


			$firstTeam 		   = TeamResult::whereTeamId($match->f_team_id)->first();
			$firstTeam->gf     += $match->f_player_gaols;
			$firstTeam->ga     += $match->s_player_gaols;
			$firstTeam->gd     += $firstTeam->gf-$firstTeam->ga;
			$firstTeam->draw   += ($match->draw == true)? 1: 0;
			$firstTeam->won    += ($match->f_player_gaols > $match->s_player_gaols) ? 1 : 0;
			$firstTeam->lost   += ($match->f_player_gaols < $match->s_player_gaols)? 1 : 0;
			$firstTeam->points += ($match->draw == true) ? 1: ($match->f_player_gaols > $match->s_player_gaols  ? 3 : 0 ) ;
			$firstTeam->played += 1;
			$firstTeam->save();


			$secondTeam 	    = TeamResult::whereTeamId($match->s_team_id)->first();
			$secondTeam->gf     += $match->s_player_gaols;
			$secondTeam->ga     += $match->f_player_gaols;
			$secondTeam->gd     += $secondTeam->gf-$secondTeam->ga;
			$secondTeam->draw   += ($match->draw == true)? 1: 0;
			$secondTeam->won    += ($match->f_player_gaols < $match->s_player_gaols) ? 1 : 0;
			$secondTeam->lost   += ($match->f_player_gaols > $match->s_player_gaols) ? 1 : 0;
			$secondTeam->points += ($match->draw == true) ? 1: ($match->s_player_gaols > $match->f_player_gaols  ? 3 : 0 ) ;
			$secondTeam->played += 1;
			$secondTeam->save();

		}

	}

		
}