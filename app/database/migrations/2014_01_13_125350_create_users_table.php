<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user', 64);
			$table->string('password', 64);
			$table->timestamps();
		});

		Schema::create('news', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 200);
			$table->text('desc');
			$table->mediumText('text');
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
		Schema::drop('users');
	}

}