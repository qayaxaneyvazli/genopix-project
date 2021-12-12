<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TraitRange extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'trait_ranges';

    protected $fillable = [
        'showed_name',
        'description',
        'start_range',
        'end_range',
        'trait_id',
    ];

    function trait ()
    {
        return $this->belongsTo(Traits::class, 'trait_id');
    }

}
