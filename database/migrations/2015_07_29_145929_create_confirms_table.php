<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfirmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('confirms', function(Blueprint $table)
		{
			$table->string('email')->unique();
			$table->string('confirmation_code')->nullable();
			$table->string('name', 32);
			$table->string('password', 64);
			$table->string('uid');
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
		Schema::drop('confirms');
	}

}
