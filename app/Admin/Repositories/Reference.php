<?php

namespace App\Admin\Repositories;

use App\Models\Reference as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Reference extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
