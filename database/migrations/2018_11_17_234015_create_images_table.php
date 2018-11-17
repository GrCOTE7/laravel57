<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
 /**
  * Run the migrations.
  *
  * @return void
  */
 public function up()
 {
  Schema::create('images', function (Blueprint $table) {
   $table->increments('id');
   $table->integer('category_id')->unsigned();
   $table->integer('user_id')->unsigned();
   $table->string('name');
   $table->string('description')->nullable();
   $table->boolean('adult')->default(false);
   $table->integer('clicks')->unsigned()->default(0);
   $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
   $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
  Schema::dropIfExists('images');
 }
}
