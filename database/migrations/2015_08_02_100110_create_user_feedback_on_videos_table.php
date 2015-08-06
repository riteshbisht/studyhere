<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFeedbackOnVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_feedback_on_videos', function(Blueprint $table)
		{

			$table->string('email');
			$table->string('url')->primary();
			$table->foreign('url')->references('youtubevideoid')->on('videos');
			$table->boolean('feedback');
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
		Schema::drop('user_feedback_on_videos');
	}

}
