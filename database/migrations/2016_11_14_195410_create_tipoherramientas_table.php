<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoherramientasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoherramientas', function (Blueprint $table) {
            $table->increments('idtipo');
            $table->string('marcatipo');
            $table->string('modelotipo');
            $table->string('tipotipo');
            $table->string('ottipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoherramientas');
    }
}
