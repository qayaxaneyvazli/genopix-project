<?php

namespace App\Admin\Repositories;

use App\Models\TraitResult as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class TraitResult extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;


}
