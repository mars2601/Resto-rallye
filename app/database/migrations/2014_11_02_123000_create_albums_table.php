<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('albums', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('slug');
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
        Schema::drop('albums');
	}

}
