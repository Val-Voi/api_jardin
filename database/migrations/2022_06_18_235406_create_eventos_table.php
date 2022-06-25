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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->date('fecha');
            
            $table->unsignedBigInteger('nino_id');
            $table->foreign('nino_id')->references('id')->on('niños');
        });
    }


    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
