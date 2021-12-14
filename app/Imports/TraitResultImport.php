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
        if(!Arr::get($row, 'trait') && !Arr::get($row, 'sample')) {
            return;
        }
        $traitData = Traits::where('name', $row['trait'])->first();
        $user = User::where('barcode', $row['sample'])->first();

        $traitResult = new TraitResult();
        $traitResult->trait_id = !is_null($traitData) ? $traitData->id : 0;
        $traitResult->user_id = !is_null($user) ? $user->id : 0;
        $traitResult->score = $row['score'];
        $traitResult->save();


        $snp = new Snp();
        $snp->name=!is_null($row['of_snps']) ? $row['of_snps'] : '';
        $snp->save();

        $rsid = new Rsid();
        $rsid->name=!is_null($row['rsid']) ? $row['rsid'] : '';
        $rsid->save();

        $effectAllele = new EffectAllele();
        $effectAllele->name=!is_null($row['effect_allele']) ? $row['effect_allele'] : '';
        $effectAllele->save();

        $referenceAllele = new ReferenceAllele();
        $referenceAllele->name=!is_null($row['reference_allele']) ? $row['reference_allele'] : '';
        $referenceAllele->save();

        $genotype = new Genotype();
        $genotype->name=!is_null($row['user_genotype']) ? $row['user_genotype'] : '';
        $genotype->save();

        $reference = new Reference();
        $reference->name=!is_null($row['reference']) ? $row['reference'] : '';
        $reference->save();

        $reliability = new Reliability();
        $reliability->name=!is_null($row['reliability']) ? $row['reliability'] : '';
        $reliability->save();

        $population = new Population();
        $population->name=!is_null($row['population']) ? $row['population'] : '';
        $population->save();

        $geneinld = new Geneinld();
        $geneinld->name=!is_null($row['gene_in_ld']) ? $row['gene_in_ld'] : '';
        $geneinld->save();

//        dd($row);
        $traitResult->rsids()->attach($snp);
        $traitResult->snps()->attach($rsid);
        $traitResult->referencealleles()->attach($referenceAllele);
        $traitResult->genotypes()->attach($genotype);
        $traitResult->references()->attach($reference);
        $traitResult->reliabilities()->attach($reliability);
        $traitResult->populations()->attach($population);
        $traitResult->geneinlds()->attach($geneinld);
        $date = date('Y-m-d');
        File::move(storage_path('app\public\file.xlsx'), storage_path('app\oldfiles\file'.$date.'.xlsx'));

    }
}
