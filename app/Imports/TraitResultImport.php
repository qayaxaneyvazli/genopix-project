<?php

namespace App\Imports;

use App\Models\TraitResult;
use App\Models\User;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Traits;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Models\Rsid;
use App\Models\Snp;
use App\Models\EffectAllele;
use App\Models\ReferenceAllele;
use App\Models\Genotype;
use App\Models\Reference;
use App\Models\Reliability;
use App\Models\Population;
use App\Models\Geneinld;
use Illuminate\Support\Facades\File;

class TraitResultImport implements ToModel, WithHeadingRow
{

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if (!Arr::get($row, 'trait') && !Arr::get($row, 'sample')) {
            return;
        }
        $traitData = Traits::where('name', $row['trait'])->first();
        $user = User::where('barcode', $row['sample'])->first();

        $traitResult = new TraitResult();
        $traitResult->trait_id = !is_null($traitData) ? $traitData->id : 0;
        $traitResult->user_id = !is_null($user) ? $user->id : 0;
        $traitResult->score = $row['score'];
        $traitResult->save();


        if (!is_null($row['of_snps'])) {
            $snp = new Snp();
            $snp->name = $row['of_snps'];
            $snp->save();
            $traitResult->snps()->attach($snp);
        }
//        $snp->name=!is_null($row['of_snps']) && $row['of_snps']!==null ? $row['of_snps'] : false;
//        $snp->save();

        if (!is_null($row['rsid'])) {
            $rsid = new Snp();
            $rsid->name = $row['rsid'];
            $rsid->save();
            $traitResult->rsids()->attach($rsid);
        }
        if (!is_null($row['effect_allele'])) {
            $effectAllele = new EffectAllele();
            $effectAllele->name = $row['effect_allele'];
            $effectAllele->save();
            $traitResult->effectalleles()->attach($effectAllele);
        }

        if (!is_null($row['reference_allele'])) {
            $referenceAllele = new ReferenceAllele();
            $referenceAllele->name = $row['reference_allele'];
            $referenceAllele->save();
            $traitResult->referencealleles()->attach($referenceAllele);
        }

        if (!is_null($row['user_genotype'])) {
            $genotype = new Genotype();
            $genotype->name = $row['user_genotype'];
            $genotype->save();
            $traitResult->genotypes()->attach($genotype);
        }

        if (!is_null($row['reference'])) {
            $reference = new Reference();
            $reference->name = $row['reference'];
            $reference->save();
            $traitResult->references()->attach($reference);
        }
        if (!is_null($row['reliability'])) {
            $reliability = new Reliability();
            $reliability->name = $row['reliability'];
            $reliability->save();
            $traitResult->reliabilities()->attach($reliability);
        }
        if (!is_null($row['population'])) {
            $population = new Population();
            $population->name = $row['population'];
            $population->save();
            $traitResult->populations()->attach($population);
        }
        if (!is_null($row['gene_in_ld'])) {
            $geneinld = new Geneinld();
            $geneinld->name = $row['gene_in_ld'];
            $geneinld->save();
            $traitResult->geneinlds()->attach($geneinld);
        }

    }
}
