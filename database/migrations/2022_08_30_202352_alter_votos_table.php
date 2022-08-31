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
        Schema::table('votos', function (Blueprint $table) {
            $table->dropForeign(['secao_id']);
            $table->dropColumn('secao_id');
            $table->dropForeign(['zona_id']);
            $table->dropColumn('zona_id');
            $table->integer('zona');
            $table->integer('secao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('votos', function (Blueprint $table) {
            $table->unsignedBigInteger('secao_id');
            $table->unsignedBigInteger('zona_id');

        });
    }
};
