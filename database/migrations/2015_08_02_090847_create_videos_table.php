<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videos', function(Blueprint $table)
		{
			$table->string('subtopic_code');
			$table->string('url');
			$table->string('title');
			$table->string('description');
			$table->string('youtubevideoid')->primary();
			$table->foreign('subtopic_code')->references('subtopic_code')->on('sub_topics');
			$table->integer('pluscount')->deafult(0);
			$table->integer('views')->default(0);
			$table->integer('negcount')->default(0);
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
		Schema::drop('videos');
	}

}
