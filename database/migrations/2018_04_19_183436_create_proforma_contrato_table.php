<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaterioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caterio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('compañia');
            $table->string('persona_contacto');
            $table->string('codigo_cliente');
            $table->timestamps('fecha');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caterio');
    }
}
