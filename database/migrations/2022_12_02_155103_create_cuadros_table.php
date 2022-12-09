<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuadros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('dimensiones');
            $table->string('tecnica');
            $table->string('descripcion');
            $table->string('imagen');
            $table->double('precio', 6, 2)->nullable();
            $table->boolean('en_venta');
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
        Schema::dropIfExists('cuadros');
    }
};
