<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuneRunewordPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rune_runeword_pivot', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rune_id');
            $table->unsignedBigInteger('runeword_id');

            $table->foreign('rune_id')->references('id')->on('runes')->cascadeOnDelete();
            $table->foreign('runeword_id')->references('id')->on('runewords')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rune_runeword_pivot');
    }
}
