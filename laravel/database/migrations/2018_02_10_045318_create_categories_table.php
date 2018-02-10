<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            //creamos el campo name en la tabla de categorias
            $table->string('name',128);
            //creamos el campo slug en la tabla de categorias
            $table->string('slug',128)->unique();//no se podra repetir en la tabla
            $table->mediumText('body')->nullable();//un campo para el body 
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
        Schema::dropIfExists('categories');
    }
}
