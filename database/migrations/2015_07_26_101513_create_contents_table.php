<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('subtopic_code');
			$table->string('content')->default('not available');
			$table->string('source');
			$table->string('urlofcloud');
			$table->foreign('subtopic_code')->references('subtopic_code')->on('sub_topics');
			$table->integer('pluscount');
			$table->integer('negcount');
			$table->integer('views');
			$table->integer('noofimages');
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
		Schema::drop('contents');
	}

}
