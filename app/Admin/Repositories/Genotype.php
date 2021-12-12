<?php

namespace App\Admin\Repositories;

use App\Models\Genotype as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Genotype extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
