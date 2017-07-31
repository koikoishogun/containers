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
       
		Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
			$table->string('file_type');
			$table->integer('code')->unsigned();
            $table->timestamps();
        });
		
		Schema::create('uploads', function (Blueprint $table) {
            $table->increments('id');
			$table->text('name');
			$table->integer('file_type')->unsigned();
			$table->foreign('file_type')->references('id')->on('files');
            $table->timestamps();
        });
	   Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');
			$table->string('name');
			$table->text('body');
			$table->integer('image')->unsigned();
			$table->foreign('image')->references('id')->on('uploads');
			$table->integer('doc')->unsigned();
			$table->foreign('doc')->references('id')->on('uploads');
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
        Schema::dropIfExists('posts');
    }
}
