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
            $table->id();//Integer Unsigned Increment
            // $table->string('name', 100);//Varchar 255 default - 100 por defecto
            // $table->text('name');//para mayor cantidad
            // $table->timestamp('email_verified_at')->nullable();//Por si el campo queda vacio se pasa la propiedad nullable()
            $table->string('name');//Varchar 255 default
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();//create_at update_at
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
