<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('nama_kelas');
            // Tambahkan foreign key siswa_id dengan cara yang benar
            // $table->unsignedInteger('siswa_id');
            // $table->foreign('siswa_id')
            //       ->references('id')->on('siswa')
            //       ->onDelete('cascade')
            //       ->onUpdate('cascade');

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
        Schema::dropIfExists('kelas');
    }
}
