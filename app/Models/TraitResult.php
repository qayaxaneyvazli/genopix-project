<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TraitResult extends Model
{
    use HasDateTimeFormatter;

    use SoftDeletes;

    protected $table = 'trait_results';

    protected $casts = [
        'snps'             => 'array',
        'rsID'             => 'array',
        'effect_allele'    => 'array',
        'reference_allele' => 'array',
        'genotype'         => 'array',
        'reliability'      => 'array',
        'gene_in_ld'       => 'array',

        'population'       => 'array',
        'references'       => 'array',
    ];

    function trait ()
    {
        return $this->hasOne(Traits::class, 'id', 'trait_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
