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
        Schema::create('votantes', function (Blueprint $table) {
            $table->id();
            $table->integer("eleitor_id")->unsigned();
            $table->integer("periodo_id")->unsigned();

            $table->foreign("eleitor_id")->references("id")->on("eleitores")->onDelete("cascade");
            $table->foreign("periodo_id")->references("id")->on("periodos")->onDelete("cascade");
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
        Schema::dropIfExists('votantes');
    }
};
