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

		Schema::create('pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 200);
			$table->string('url', 200);
			$table->string('wrapper', 200);
			$table->text('meta_en');
			$table->text('meta_ch');
			$table->text('meta_vi');
			$table->mediumText('content_en');
			$table->mediumText('content_ch');
			$table->mediumText('content_vi');
			$table->text('scripts');
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
		Schema::drop('news');
		Schema::drop('pages');
	}

}