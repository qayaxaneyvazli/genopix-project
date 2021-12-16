<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Ethnic extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;
    protected $guarded=[];

    public function userprofiles()
    {
        return $this->belongsTo(UserProfile::class,'ethnicities','id');
    }



    }
