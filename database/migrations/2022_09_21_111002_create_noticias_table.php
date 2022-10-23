<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string("titular");
            $table->string("image");
            $table->string("piefoto");
            $table->string("subtitulo");
            $table->longText("noticia");
            $table->string("fecha");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
};
