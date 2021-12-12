<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->mediumText('description');
            $table->string('icon')->nullable();
            $table->string('status')->default('active');
            $table->integer('trait_category_id')->nullable()->default(0);
            $table->string('pricing_type')->default('free');
            $table->string('referance_title')->nullable();
            $table->mediumText('refereance_description')->nullable();
            $table->string('reference_url')->nullable();
            $table->string('referance_values')->nullable();
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
        Schema::dropIfExists('traits');
    }
}
