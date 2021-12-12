<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraitRangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trait_ranges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('showed_name')->nullable();
            $table->text('description')->nullable();
            $table->decimal('start_range')->nullable();
            $table->decimal('end_range')->nullable();
            $table->integer('trait_id');
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
        Schema::dropIfExists('trait_ranges');
    }
}
