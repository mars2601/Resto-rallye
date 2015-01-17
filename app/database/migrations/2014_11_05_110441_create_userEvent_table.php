<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEventTable extends Migration {

	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('eventuser', function(Blueprint $table)
		{
				$table->increments('id');
				$table->string('rallye_id');
				$table->string('user_id');
				$table->string('place');
				$table->string('entreprise');

				// contact person infos
				$table->string('contactFirstName');
				$table->string('contactLastName');
				$table->string('email');
				$table->string('street');
				$table->string('streetNumber');
				$table->string('town');
				$table->string('telephone');

				$table->boolean('confirmationCode');
				$table->boolean('confirmation');

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
		Schema::drop('eventuser');
	}
}
