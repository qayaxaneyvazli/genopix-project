<?php

namespace App\Admin\Repositories;

use App\Models\ReferenceAllele as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class ReferenceAllele extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
