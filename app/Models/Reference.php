<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
	use HasDateTimeFormatter;


    public function traitresults(){

        return $this->belongsToMany('App\Models\TraitResult','traitresult_reference');
    }}
