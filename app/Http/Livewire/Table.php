<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MatchWeek;
use App\Models\Team;
use App\Models\Match;
use App\Models\TeamResult;
use App\Services\MatchService;
class Table extends Component
{


	public $weeks;
	
	public $matches;

	public $currentWeek;

	public $count;

	public $teamResults;

	public function mount() {

		$this->weeks = MatchWeek::orderBy('id', 'desc')->get();
		$this->teamResults = TeamResult::orderBy('id', 'desc')->get();

		$this->count = 1;


		$weeks		 = MatchWeek::orderBy('id', 'desc')->get();
		$currentWeek = $weeks->first();

		$this->matches     = Match::whereMatchWeekId($currentWeek->id)->get();

		new MatchService($currentWeek->id);
		
	}




	public function filter() {

		$this->weeks = [];
		$this->count +=1;
	}


	public function createMatch() {



	}


    public function render()
    {
        return view('livewire.table');
    }
}
