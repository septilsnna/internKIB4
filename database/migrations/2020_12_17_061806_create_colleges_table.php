<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('nama_univ');
            $table->string('jenis_univ');
            $table->string('status_univ');
            $table->char('akre_univ', 1);
            $table->string('prov_univ');
            $table->integer('jml_fak');
            $table->integer('jml_prodi');
            $table->longText('deskripsi');
            $table->binary('gambar');
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
        Schema::dropIfExists('colleges');
    }
}