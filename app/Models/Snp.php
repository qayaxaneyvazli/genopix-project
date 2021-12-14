<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Snp extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    public function traitresults(){

        return $this->belongsToMany('App\Models\TraitResult','traitresult_snp');
    }

}
