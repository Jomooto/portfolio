<?php

use App\Technology;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatetechnologiablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technologiables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('technology_id');
            $table->morphs('technologiable');
            $table->foreign('technology_id')->references('id')->on('technologies')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technologiable');
    }
}
