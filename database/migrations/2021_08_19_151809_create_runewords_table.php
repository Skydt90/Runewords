<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunewordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runewords', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40)->unique();
            $table->string('combination');
            $table->unsignedSmallInteger('level');
            $table->text('attributes');
            $table->string('item_type');
            $table->boolean('ladder_only')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('runewords');
    }
}
