<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRallyesTable extends Migration {

	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('rallyes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('town');
			$table->string('street');
			$table->tinyInteger('streetNumber');
			$table->dateTime('date');
			$table->string('place');
			$table->longText('description');
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
		Schema::drop('rallyes');

	}

}
