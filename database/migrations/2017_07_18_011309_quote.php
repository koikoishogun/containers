<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Quote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create( "quotations",function(  Blueprint $table) {
			$table->increments('id');
            $table->text('type');
			$table->string('size');
			$table->string('name');
			$table->string('phone_number');
			$table->string('email');
			$table->integer('number')->unsigned();
			$table->timestamps();
			
		}  );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
