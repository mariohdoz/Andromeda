<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTorquimetrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torquimetros', function (Blueprint $table) {
            $table->increments('idtor');
            'serietor',
            'partetor',
            'marcator',
            'modelotor',
            'unidadtor',
            'rangotor',
            'resoluciontor',
            'emisortor'
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
        Schema::dropIfExists('torquimetros');
    }
}
