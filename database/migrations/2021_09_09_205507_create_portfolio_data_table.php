<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_data', function (Blueprint $table) {
            $table->id();
            $table->morphs('portfoliable');
            $table->string('portfolTitle')->nullable();           
            $table->string('picture')->nullable();
            $table->string('descriptionTitle')->nullable();
            $table->text('description')->nullable();
            $table->string('github')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('contactEmail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio_data');
    }
}
