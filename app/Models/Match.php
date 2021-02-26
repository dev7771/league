<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
class Match extends Model
{
    use HasFactory;


    protected $with = ['firstTeam', 'secondTeam'];

    
    public function firstTeam() {

    	return $this->belongsTo(Team::class,'f_team_id');
    }


    public function secondTeam() {

    	return $this->belongsTo(Team::class,'s_team_id');
    }
}