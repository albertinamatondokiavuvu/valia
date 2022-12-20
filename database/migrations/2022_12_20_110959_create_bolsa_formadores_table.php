<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBolsaFormadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolsa_formadores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nomeCompleto');
            $table->string('email');

            $table->string('areaFormacao');
            $table->string('categoria');
            $table->string('localidade');

            $table->string('fotoPasse');
            $table->string('cv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bolsa_formadores');
    }
}
