<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'user_profiles';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'ethnicities' => 'array',
        'interests'   => 'array',
    ];

}
