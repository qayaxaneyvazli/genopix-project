<?php

namespace App\Admin\Repositories;

use App\Models\Package as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Package extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
