<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topics', function(Blueprint $table)
		{
			$table->integer('views');
			$table->string('topic_code');
			$table->primary('topic_code');
			$table->string('name');
			$table->string('subject_code');
			$table->integer('unit');
			$table->string('overview');
				$table->foreign('subject_code')->references('subject_code')->on('subjects');
		});



}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('topics');
	}

}
