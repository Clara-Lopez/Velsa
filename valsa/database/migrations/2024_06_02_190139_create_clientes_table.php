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
    Schema::create('clientes', function (Blueprint $table) {
        $table->id('ID_Cliente');
        $table->string('Nombre', 50);
        $table->string('Apellido', 50);
        $table->integer('CI_Num')->unique();
        $table->string('Direccion', 100)->nullable();
        $table->string('Telefono', 20)->nullable();
        $table->string('Ciudad', 50)->nullable();
        $table->string('Pais', 50)->nullable();
        $table->string('Mapa', 255)->nullable();
        $table->enum('Tipo_Cliente', ['personal', 'empresa']);
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
        Schema::dropIfExists('clientes');
    }
};
