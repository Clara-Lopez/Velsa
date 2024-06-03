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
    Schema::create('cierre_cajas', function (Blueprint $table) {
        $table->id('ID_Cierre');
        $table->foreignId('ID_Cobrador')->constrained('usuarios');
        $table->foreignId('ID_Administrador')->constrained('usuarios');
        $table->decimal('Monto_Entregado', 10, 2);
        $table->dateTime('Fecha_Cierre');
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
        Schema::dropIfExists('cierre_cajas');
    }
};
