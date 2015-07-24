// app/database/seeds/CoursesTableSeeder.php

<?php
use Illuminate\Database\Seeder;
class CoursesTableSeeder extends Seeder
{

public function run()
{
    DB::table('courses')->insert([

      'course_code'=>'Btech',
      'name'=>'Bachelor of Technolgy',
      'university_code'=>'IPU',

    ]);
}

}
