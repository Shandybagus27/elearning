<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('nis')->unique()->nullable();
            $table->string('nama');
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('email')->unique();
            $table->string('nama_ortu')->nullable();
            $table->text('alamat')->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->unsignedInteger('kelas_id')->index();
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
            // $table->foreign('kelas_id')
            //       ->references('id')->on('kelas')
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
        Schema::dropIfExists('siswa');
    }
}
