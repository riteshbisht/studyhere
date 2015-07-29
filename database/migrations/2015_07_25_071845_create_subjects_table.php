<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subjects', function(Blueprint $table)
		{

			$table->string('subject_code');
		$table->primary('subject_code');
			$table->string('name',40);
			$table->string('branch',20);
			$table->string('course_code');
			$table->integer('semester');
			$table->integer('year');
		$table->foreign('course_code')->references('course_code')->on('courses');
		});



	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subjects');
	}

}
