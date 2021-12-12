<?php

namespace App\Admin\Repositories;

use App\Models\Referance as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Referance extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
