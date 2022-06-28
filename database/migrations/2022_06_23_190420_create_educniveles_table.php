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

            $table->unsignedBigInteger('nivel_id');
            $table->foreign('nivel_id')->references('id')->on('niveles');

            $table->unsignedBigInteger('educadora_id');
            $table->foreign('educadora_id')->references('id')->on('educadoras');
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
