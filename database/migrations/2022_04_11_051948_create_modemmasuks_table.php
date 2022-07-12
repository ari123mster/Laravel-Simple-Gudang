<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModemmasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modemmasuks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('modem_id');
            $table->foreign('modem_id')->references('id')->on('modems')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('qty');
            $table->date('tgl_masuk');
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
        Schema::dropIfExists('modemmasuks');
    }
}
