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
    Schema::create('usuarios', function (Blueprint $table) {
        $table->id('ID_Usuario');
        $table->string('Nombre_Usuario', 50)->unique();
        $table->string('Contraseña', 255);
        $table->foreignId('ID_Rol')->constrained('roles');
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
        Schema::dropIfExists('usuarios');
    }
};
