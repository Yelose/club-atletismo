<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cronos', function (Blueprint $table) {
            $table->id();

            $table->string('fecha');
            $table->longText('resumen');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cronos');
    }
};
