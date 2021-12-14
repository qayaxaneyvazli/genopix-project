<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reliability extends Model
{
    use HasFactory;
    public function traitresults(){

        return $this->belongsToMany('App\Models\TraitResult','traitresult_reliability');
    }
}
