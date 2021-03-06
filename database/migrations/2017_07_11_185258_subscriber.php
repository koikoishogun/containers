<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Subscriber extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up( )
    {
        //
		Schema::create('subscribers', function( Blueprint $table ){
			$table->increments('id');
			$table->string('name');
			$table->string('phone_no');
			$table->string('email');
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
