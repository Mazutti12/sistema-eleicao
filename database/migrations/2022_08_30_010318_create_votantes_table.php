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
            $table->unsignedBigInteger("eleitor_id");
            $table->unsignedBigInteger("periodo_id");

            $table->foreign("eleitor_id")->references("id")->on("eleitores");
            $table->foreign("periodo_id")->references("id")->on("periodos");
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
