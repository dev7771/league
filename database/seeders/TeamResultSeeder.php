<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

         DB::table('team_results')->insert([[
	            'id' => 1,
	            'team_id' => 1,
	            'match_week_id' => 1,
	        ],[
	            'id' => 2,
	            'team_id' => 2,
	            'match_week_id' => 1,
	        ],[
	            'id' => 3,
	            'team_id' => 3,
	            'match_week_id' => 1,
	        ],[
	            'id' => 4,
	            'team_id' => 4,
	            'match_week_id' => 1,
	        ],[
	            'id' => 5,
	            'team_id' => 5,
	            'match_week_id' => 1,
	        ],[
	            'id' => 6,
	            'team_id' => 6,
	            'match_week_id' => 1,
	        ],
    	]);
    }
}
