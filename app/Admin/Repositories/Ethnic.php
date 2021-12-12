<?php

namespace App\Admin\Repositories;

use App\Models\Ethnic as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Ethnic extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
