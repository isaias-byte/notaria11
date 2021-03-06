<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbogadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abogados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 40);
            $table->string('apellido_paterno', 40);
            $table->string('apellido_materno', 40);
            $table->string('email');
            $table->string('telefono_celular', 40)->nullable(true);
            $table->string('telefono_particular', 40)->nullable(true);
            $table->string('codigo');
            $table->string('imagen_original');
            $table->string('imagen_ruta');
            $table->string('mime', 40);
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
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
        Schema::dropIfExists('abogados');
    }
    
}
