<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCocktailOrderPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cocktail_order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cocktail_id')->nullable()->unsigned();
            $table->integer('order_id')->nullable()->unsigned();
            $table->timestamps();
        });

        Schema::table('cocktail_order', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('cocktail_id')->references('id')->on('cocktails')->onDelete('cascade');
        }
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cocktail_order', function (Blueprint $table) {
            $table->dropForeign(['order_id']);
            $table->dropForeign(['cocktail_id']);
        });

        Schema::table('cocktail_order', function (Blueprint $table) {
            $table->dropIfExists('cocktail_order');
        });
    }
}
