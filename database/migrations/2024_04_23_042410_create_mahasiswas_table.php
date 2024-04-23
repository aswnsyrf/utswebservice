<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('NIM');
            $table->string('nama_mahasiswa', 100);
            $table->timestamps();
        });

        DB::table('mahasiswas')->insert([
            ['id' => 1, 'NIM' => '2101040001', 'nama_mahasiswa' =>'M Aswin Syarif Attaqwss', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'NIM' => '2101040012','nama_mahasiswa' =>'Abdurrahim', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
