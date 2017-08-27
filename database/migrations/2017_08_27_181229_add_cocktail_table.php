<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCocktailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cocktail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cocktail', function (Blueprint $table) {
            $table->dropIfExists('cocktail');
        });
    }
}
