<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id'); //membuat kolom id auto increments
			$table->string('nama');	//membuat kolom nama+
			$table->string('email'); //membuat kolom email
			$table->string('nohp'); //membuat nohp
			$table->text('alamat'); //membuat kolom alamat email dengan tipe text
            $table->timestamps(); //membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_mahasiswas');
    }
}
