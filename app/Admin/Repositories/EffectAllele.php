<?php

namespace App\Admin\Repositories;

use App\Models\EffectAllele as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class EffectAllele extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
