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
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string("nome")->nullable();
            $table->string("partido");
            $table->string("sigla_partido")->nullable();
            $table->integer("numero");
            $table->string("cargo");
            $table->unsignedBigInteger("periodo_id");

            $table->timestamps();

            $table->foreign("periodo_id")->references("id")->on("periodos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
};
