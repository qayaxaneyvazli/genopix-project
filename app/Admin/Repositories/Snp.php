<?php

namespace App\Admin\Repositories;

use App\Models\Snp as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Snp extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
