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
        Schema::create('votos', function (Blueprint $table) {
            $table->id();
            $table->dateTime("horario_voto");
            $table->unsignedBigInteger("candidato_id");
            $table->unsignedBigInteger("votante_id");
            $table->unsignedBigInteger("secao_id");
            $table->unsignedBigInteger("zona_id");

            $table->foreign("candidato_id")->references("id")->on("candidatos");
            $table->foreign("votante_id")->references("id")->on("votantes");
            $table->foreign("secao_id")->references("id")->on("secoes");
            $table->foreign("zona_id")->references("id")->on("zonas");

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
        Schema::dropIfExists('votos');
    }
};
