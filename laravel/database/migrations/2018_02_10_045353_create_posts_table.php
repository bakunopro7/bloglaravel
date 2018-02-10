<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();//no admite negativos 
            $table->integer('category_id')->unsigned();//nombre categoria
            $table->string('name',128);//titulo del post
            $table->string('slug',128)->unique();//slug del post como relación
            $table->mediumText('excerpt')->nullable();//extracto del post
            $table->text('body');
            //publicado o no depende el usuario
            $table->enum('status',['PUBLICADO','BORRADOR'])->default('BORRADOR');
            $table->string('file',128)->nullable();//el archivo de imagen 
            $table->timestamps();

                //relaciones
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
