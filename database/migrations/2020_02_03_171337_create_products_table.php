<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('colour_id');
            $table->unsignedInteger('length_id');
            $table->unsignedInteger('texture_id');
            $table->unsignedInteger('price_id');
            $table->timestamps();

            $table
                ->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table
                ->foreign('colour_id')
                ->references('id')
                ->on('colours')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table
                ->foreign('length_id')
                ->references('id')
                ->on('lengths')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table
                ->foreign('texture_id')
                ->references('id')
                ->on('textures')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table
                ->foreign('price_id')
                ->references('id')
                ->on('prices')
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
        Schema::dropIfExists('products');
    }
}
