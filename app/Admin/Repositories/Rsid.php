<?php

namespace App\Admin\Repositories;

use App\Models\Rsid as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Rsid extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
