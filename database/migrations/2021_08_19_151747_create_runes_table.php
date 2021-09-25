<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20)->unique();
            $table->unsignedBigInteger('rune_recipe_id')->nullable();
            $table->unsignedSmallInteger('level');
            $table->text('attributes');
            $table->string('image');

            $table->foreign('rune_recipe_id')->references('id')->on('rune_recipes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('runes');
    }
}
