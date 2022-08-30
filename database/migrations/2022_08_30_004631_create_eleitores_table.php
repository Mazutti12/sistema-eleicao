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
        Schema::create('eleitores', function (Blueprint $table) {
            $table->id();
            $table->string("nome")->nullable();
            $table->integer("titulo")->unique();
            $table->string("zona")->nullable();
            $table->string("secao")->nullable();

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
        Schema::dropIfExists('eleitores');
    }
};
