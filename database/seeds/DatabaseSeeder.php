<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call('UserTableSeeder');
			$this->call('UniversityTableSeeder');
				$this->call('CoursesTableSeeder');
				$this->call('SubjectTableSeeder');
			$this->call('TopicTableSeeder');
				$this->call('SubTopicTableSeeder');
				$this->call('ContentTableSeeder');
				$this->call('VideoTableSeeder');
				$this->call('ForumTableSeeder');
				$this->call('CommentTableSeeder');


	}

}
