<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('judul_ev');
            $table->string('jenis_ev');
            $table->date('tanggal_ev');
            $table->time('waktu_ev');
            $table->string('lokasi_ev');
            $table->integer('biaya_ev');
            $table->longText('deskripsi');
            $table->binary('pamflet');
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
        Schema::dropIfExists('events');
    }
}