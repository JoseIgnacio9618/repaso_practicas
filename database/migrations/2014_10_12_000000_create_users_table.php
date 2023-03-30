<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);//para mas de 256 caracteres
            $table->string('email')->unique();//Para registros unicos
            $table->timestamp('email_verified_at')->nullable();//Para guardar fehchas
            //nullable es para campos que pueden quedar vacios
            $table->string('password');
            $table->rememberToken() ;
            $table->timestamps();// Crea dos columnas created _at para cuando se creo el registro u updated_at para la ultima vez que se modifico
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
