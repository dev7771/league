<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamResult extends Model
{
    use HasFactory;


    protected $with = ['team'];

    public function team() {

    	return $this->belongsTo(Team::class);
    }
}
