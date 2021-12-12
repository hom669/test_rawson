<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id('id_film');
            $table->string('name_film')->comment('Nombre Pelicula');
            $table->year('year_film')->comment('Año Estreno Pelicula');
            $table->unsignedBigInteger('id_category')->comment('Llave Foranea para conectar con tabla de categorias');
            $table->unsignedBigInteger('id_type')->comment('Llave Foranea para conectar con tabla de Tipos');
            $table->foreign('id_type')->references('id_type')->on('types');
            $table->foreign('id_category')->references('id_category')->on('categories');
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
        Schema::dropIfExists('films');
    }
}
