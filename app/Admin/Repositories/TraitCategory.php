<?php

namespace App\Admin\Repositories;

use App\Models\TraitCategory as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class TraitCategory extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
