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
            $table->integer("candidato_id")->unsigned();
            $table->integer("votante_id")->unsigned();
            $table->integer("secao_id")->unsigned();
            $table->integer("zona_id")->unsigned();

            $table->foreign("candidato_id")->references("id")->on("candidatos")->onDelete("cascade");
            $table->foreign("votante_id")->references("id")->on("votantes")->onDelete("cascade");
            $table->foreign("secao_id")->references("id")->on("secoes")->onDelete("cascade");
            $table->foreign("zona_id")->references("id")->on("zonas")->onDelete("cascade");

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
