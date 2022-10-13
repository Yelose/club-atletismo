<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cronologias', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
            $table->Text('resumen');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('cronologias');
    }
};
