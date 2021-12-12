<?php

namespace App\Admin\Repositories;

use App\Models\UserProfile as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class UserProfile extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
