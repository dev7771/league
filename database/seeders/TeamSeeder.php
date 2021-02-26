<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
    	 DB::table('teams')->insert([[
	            'id' => 1,
	            'name' => 'Chelsea',
	            'status' => true,
	        ],[
	        	'id' => 2,
	            'name' => 'Arsenal',
	            'status' => true,
	        ],[
	        	'id' => 3,
	            'name' => 'Manchester City',
	            'status' => true,
	        ],[
	        	'id' => 4,
	            'name' => 'Liverpool',
	            'status' => true,
	        ],[
	        	'id' => 5,
	            'name' => 'Manchester United',
	            'status' => true,
	        ],[
	        	'id' => 6,
	            'name' => 'Galatasaray',
	            'status' => true,
	        ],
    	]);
    }
}
