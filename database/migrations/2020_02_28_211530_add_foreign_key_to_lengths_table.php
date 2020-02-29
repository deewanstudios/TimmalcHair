<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToLengthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lengths', function (Blueprint $table) {
            //

            $table->unsignedInteger('price_id')->after('length')->nullable();

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
        Schema::table('lengths', function (Blueprint $table) {
            //
        });
    }
}
