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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 6)->unique();
            $table->string('nama_lengkap' , 64)->nullable();
            $table->string('jabatan' , 32)->nullable();
            $table->string('telphone' , 128)->nullable();
            $table->string('password' , 16)->required();
            $table->string('remember_token' , 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
