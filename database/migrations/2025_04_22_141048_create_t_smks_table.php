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
        Schema::create('t_smks', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();
            $table->string('NISN', 12)->unique();
            $table->string('NamaSiswa', 50);
            $table->enum('Kelas', ['X', 'XI', 'XII']);
            $table->string('WaliKelas', 50);
            $table->enum('Jurusan', ['RPL', 'TKJ', 'DKV', 'TKTL', 'TAV', 'TOI']);
            $table->enum('Gedung', ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_smks');
    }
};
