<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->float('price');
            $table->boolean('availability');
            $table->text('description');
            $table->string('artist');
            $table->string('writer');
            $table->string('series');
            $table->date('sale_date');
            $table->integer('volume');
            $table->string('trim_size');
            $table->integer('pages');
            $table->string('rated');
            $table->string('slug')->unique();
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
        Schema::dropIfExists('comics');
    }
}
