<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('quiens', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('image');
            $table->Text('resumen');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('quiens');
    }
};
