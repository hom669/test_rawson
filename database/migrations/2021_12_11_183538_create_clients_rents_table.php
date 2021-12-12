<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_rents', function (Blueprint $table) {
            $table->id('id_client_rent');
            $table->integer('cost_rent')->comment('Valor de la Renta');
            $table->integer('points_client')->comment('Puntos de Fidelizacion');
            $table->unsignedBigInteger('id_client')->comment('Llave Foranea para conectar con tabla de Clientes');
            $table->foreign('id_client')->references('id_client')->on('clients');
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
        Schema::dropIfExists('clients_rents');
    }
}
