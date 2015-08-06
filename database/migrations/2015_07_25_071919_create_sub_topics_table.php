<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sub_topics', function(Blueprint $table)
		{

			$table->string('name');
			$table->string('subtopic_code');
			$table->primary('subtopic_code');
			$table->string('topic_code');
			$table->foreign('topic_code')->references('topic_code')->on('topics');
	


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sub_topics');
	}

}
