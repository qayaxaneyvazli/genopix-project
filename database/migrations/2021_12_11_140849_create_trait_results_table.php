<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraitResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trait_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trait_id');
            $table->integer('user_id');
            $table->string('score')->default('');
            $table->string('snps')->nullable();
            $table->text('rsID')->nullable();
            $table->string('effect_allele')->nullable();
            $table->string('reference_allele')->nullable();
            $table->string('genotype')->nullable();
            $table->string('reliability')->nullable();
            $table->string('population')->nullable();
            $table->string('gene_in_ld')->nullable();
            $table->text('references')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trait_results');
    }
}
