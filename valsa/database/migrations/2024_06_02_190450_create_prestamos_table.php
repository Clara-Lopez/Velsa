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
    Schema::create('prestamos', function (Blueprint $table) {
        $table->id('ID_Prestamo');
        $table->foreignId('ID_Cliente')->constrained('clientes');
        $table->decimal('Monto', 10, 2);
        $table->date('Fecha_Inicio');
        $table->date('Fecha_Pago')->nullable();
        $table->date('Fecha_Vencimiento');
        $table->integer('Cantidad_Cuota');
        $table->string('Tipo_Prestamo', 50);
        $table->integer('Dias_Mora')->default(0);
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
        Schema::dropIfExists('prestamos');
    }
};
