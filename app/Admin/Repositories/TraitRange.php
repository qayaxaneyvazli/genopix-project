<?php

namespace App\Admin\Repositories;

use App\Models\TraitRange as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class TraitRange extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
