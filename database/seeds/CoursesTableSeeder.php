// app/database/seeds/CoursesTableSeeder.php

<?php
use Illuminate\Database\Seeder;
class CoursesTableSeeder extends Seeder
{

public function run()
{
    DB::table('courses')->insert([

      'course_code'=>'BtechIPU',
      'name'=>'Bachelor of Technolgy',
      'university_code'=>'IPU',

    ]);

    DB::table('courses')->insert([

      'course_code'=>'BBAIPU',
      'name'=>'Bachelor of Technolgy',
      'university_code'=>'IPU',

    ]);
    DB::table('courses')->insert([

      'course_code'=>'MBAIPU',
      'name'=>'Bachelor of Technolgy',
      'university_code'=>'IPU',


    ]);
    DB::table('courses')->insert([

      'course_code'=>'BtechMTU',
      'name'=>'Bachelor of Technolgy',
      'university_code'=>'MTU',

    ]);
}

}
