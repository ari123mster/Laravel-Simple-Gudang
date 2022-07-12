<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModemkeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modemkeluars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('modem_id');
            $table->foreign('modem_id')->references('id')->on('modems')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('qty');
            $table->date('tgl_keluar');
            $table->string('keterangan');
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
        Schema::dropIfExists('modemkeluars');
    }
}
