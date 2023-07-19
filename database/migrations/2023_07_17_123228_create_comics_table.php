<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Creo modello di tabella con dati accettati
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');
            $table->text('thumb');
            $table->string('price');
            $table->string('series');
            $table->dateTime('sale_date')->nullable();
            $table->string('type');
            $table->string('artists')->nullable()->default('');
            $table->string('writers')->nullable()->default('');

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
};
