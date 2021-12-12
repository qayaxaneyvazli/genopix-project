<?php

namespace App\Admin\Repositories;

use App\Models\Traits as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Traits extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
