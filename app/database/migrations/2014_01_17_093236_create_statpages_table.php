<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('statPages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('url');
			$table->string('wrapper');
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
		Schema::drop('statPages');
	}

}
