<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MatchWeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
        DB::table('match_weeks')->insert([[
            'id' => 1,
            'name' => Str::random(10),
            'start_date' => date('Y.m.d', strtotime('04.01.2020')),
            'end_date' => date('Y.m.d', strtotime('10.01.2020')),
        ],[
        	'id' => 2,
            'name' => Str::random(10),
            'start_date' => date('Y.m.d', strtotime('10.01.2020')),
            'end_date' => date('Y.m.d', strtotime('16.01.2020')),
        ],[
        	'id' => 3,
            'name' => Str::random(10),
            'start_date' => date('Y.m.d', strtotime('17.01.2020')),
            'end_date' => date('Y.m.d', strtotime('24.01.2020')),
        ],[
        	'id' => 4,
            'name' => Str::random(10),
            'start_date' => date('Y.m.d', strtotime('25.01.2020')),
            'end_date' => date('Y.m.d', strtotime('31.01.2020')),
        ],

    	]);

    }
}
