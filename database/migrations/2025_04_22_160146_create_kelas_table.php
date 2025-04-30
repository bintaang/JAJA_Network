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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('Kelas', ['X', 'XI', 'XII']);
        });

        Schema::table('t_smks', function(Blueprint $table){
            $table->enum('WaliKelas', ['Hana', 'Ilham', 'Gerald'])->change();
        });
        Schema::create('WaliKelas', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->enum('WaliKelas', ['Hana', 'Ilham', 'Gerald']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
