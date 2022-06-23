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
        Schema::create('educadora_nivel', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('niveles_id');
            $table->foreign('niveles_id')->references('id')->on('niveles');

            $table->unsignedBigInteger('educadoras_id');
            $table->foreign('educadoras_id')->references('id')->on('educadoras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educadora_nivel');
    }
};
