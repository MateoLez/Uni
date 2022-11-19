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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('Documento')->nullable();
            $table->string('Apellidos')->nullable();
            $table->string('Fecha')->nullable();
            $table->string('Sexo')->nullable();
            $table->string('Numero')->nullable();
            $table->string('Observaciones')->nullable();
            $table->string('Lugar')->nullable();
            $table->string('Papa')->nullable();
            $table->string('Mama')->nullable();
            $table->string('Colegio')->nullable();
            $table->string('Direccion')->nullable();

            $table->string('Eps')->nullable();
            $table->string('Acudiente')->nullable();
            $table->string('Curso')->nullable();
            $table->string('Numero2')->nullable();
            $table->string('Emergencia')->nullable();
            $table->string('Jornada')->nullable();
            $table->string('Sangre')->nullable();
            $table->string('Programa')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
