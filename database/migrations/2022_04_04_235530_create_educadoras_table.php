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
        Schema::create('educadoras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('rut');
            $table->string('telefono_contacto');
            $table->string('correo_contacto');

            //$table->imagen

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educadoras');
    }
};
