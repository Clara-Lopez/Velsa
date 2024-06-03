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
    Schema::create('cobros', function (Blueprint $table) {
        $table->id('ID_Cobro');
        $table->foreignId('ID_Cliente')->constrained('clientes');
        $table->decimal('Monto_Cobrado', 10, 2);
        $table->dateTime('Fecha_Cobro');
        $table->enum('Tipo_Cobro', ['préstamo', 'electrodoméstico']);
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
        Schema::dropIfExists('cobros');
    }
};
