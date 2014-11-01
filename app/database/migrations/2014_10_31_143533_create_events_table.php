<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('town');
			$table->string('street');
			$table->tinyInteger('streetNumber');
			$table->dateTime('date');
			$table->longText('description');
			$table->timestamps();
		});
		Schema::create('quotes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('author');
			$table->string('content');
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
		Schema::drop('events');
		Schema::drop('quotes');
	}

}
