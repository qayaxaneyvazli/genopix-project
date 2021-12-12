<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Traits extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    public function category()
    {
        return $this->hasOne(TraitCategory::class, 'id', 'trait_category_id');
    }

    public function ranges()
    {
        return $this->hasMany(TraitRange::class, 'trait_id', 'id');
    }

}
