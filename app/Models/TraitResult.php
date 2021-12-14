<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TraitResult extends Model
{
    use HasDateTimeFormatter;

    use SoftDeletes;
    protected $guarded=[];
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
    public function snps(){

        return $this->belongsToMany('App\Models\Snp','traitresult_snp');
    }

    public function rsids(){

         return $this->belongsToMany('App\Models\Rsid','traitresult_rsid');
    }

    public function effectalleles(){

        return $this->belongsToMany('App\Models\EffectAllele','traitresult_effectallele');
    }
    public function referencealleles(){

        return $this->belongsToMany('App\Models\ReferenceAllele','traitresult_referenceallele');
    }
    public function genotypes(){

        return $this->belongsToMany('App\Models\Genotype','traitresult_genotype');
    }
    public function reliabilities(){

        return $this->belongsToMany('App\Models\Reliability','traitresult_reliability');
    }

    public function populations(){

        return $this->belongsToMany('App\Models\Population','traitresult_population');
    }
    public function geneinlds(){

        return $this->belongsToMany('App\Models\Geneinld','traitresult_geneinld');
    }
    public function references(){

        return $this->belongsToMany('App\Models\Reference','traitresult_reference');
    }



}
