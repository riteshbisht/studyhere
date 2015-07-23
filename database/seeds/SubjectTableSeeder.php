// app/database/seeds/SubjectTableSeeder.php

<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
class SubjectTableSeeder extends Seeder
{

public function run()
{

    DB::table('subjects')->insert([
        'subject_code'=>'ETMA-101',
        'name'=>'Applied Mathematics-I',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>1,
        'year'=>1,

    ]);

    DB::table('subjects')->insert([
        'subject_code'=>'ETPH-103',
        'name'=>'Applied Physics-I',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>1,
          'year'=>1,

    ]);
    DB::table('subjects')->insert([
        'subject_code'=>'ETME-105',
        'name'=>'Manufacturing Processes',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>1,
          'year'=>1,
    ]);
    DB::table('subjects')->insert([
        'subject_code'=>'ETEE-107',
        'name'=>'Electrical Technology',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>1,
    ]);
    DB::table('subjects')->insert([
        'subject_code'=>'ETHS-109',
        'name'=>'Human Values & Professional Ethics',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>1,
          'year'=>1,
    ]);
    DB::table('subjects')->insert([
        'subject_code'=>'ETCS-111',
        'name'=>'Fundamentals of Computing',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>1,
          'year'=>1,
    ]);
    DB::table('subjects')->insert([
        'subject_code'=>'ETCH-113',
        'name'=>'Applied Chemistry',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>1,
          'year'=>1,
    ]);
    DB::table('subjects')->insert([
        'subject_code'=>'ETPH-151',
        'name'=>'Applied Physics Lab-I',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>1,
          'year'=>1,
    ]);
    DB::table('subjects')->insert([
        'subject_code'=>'ETEE-153',
        'name'=>'Electrical Technology Lab',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>1,
          'year'=>1,
    ]);
    DB::table('subjects')->insert([
        'subject_code'=>'ETME-155',
        'name'=>'Workshop Practice',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>1,
          'year'=>1,
    ]);
    DB::table('subjects')->insert([
        'subject_code'=>'ETME-157',
        'name'=>'Engineering Graphics Lab',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>1,
          'year'=>1,
    ]);
    DB::table('subjects')->insert([
        'subject_code'=>'ETCS-157',
        'name'=>'Fundamental of Computing Lab',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>1,
          'year'=>1,
    ]);
    DB::table('subjects')->insert([
        'subject_code'=>'ETCH-161',
        'name'=>'Applied Chemistry Lab',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>1,
          'year'=>1,
    ]);

    DB::table('subjects')->insert([
        'subject_code'=>'ETMA-102',
        'name'=>'APPLIED MATHEMATICS-II',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>2,
          'year'=>1,
    ]);

    DB::table('subjects')->insert([
        'subject_code'=>'ETPH-104',
        'name'=>'APPLIED PHYSICS-II',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>2,
          'year'=>1,
    ]);

    DB::table('subjects')->insert([
        'subject_code'=>'ETEC-106',
        'name'=>'Electronic Devices',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>2,
          'year'=>1,
    ]);

    DB::table('subjects')->insert([
        'subject_code'=>'ETCS-108',
        'name'=>'Introduction to Programming',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>2,
          'year'=>1,
    ]);

    DB::table('subjects')->insert([
        'subject_code'=>'ETME-110',
        'name'=>'Engineering Mechanics',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>2,
          'year'=>1,
    ]);

    DB::table('subjects')->insert([
        'subject_code'=>'ETHS-112',
        'name'=>'Communication Skills',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>2,
          'year'=>1,
    ]);

    DB::table('subjects')->insert([
        'subject_code'=>'ETEN-114',
        'name'=>'Environmental Studies',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>2,
          'year'=>1,
    ]);

    DB::table('subjects')->insert([
        'subject_code'=>'ETPH-152',
        'name'=>'Applied Physics Lab – II',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>2,
          'year'=>1,
    ]);

    DB::table('subjects')->insert([
        'subject_code'=>'ETEC-156',
        'name'=>'Electronic Devices Lab',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>2,
          'year'=>1,
    ]);

    DB::table('subjects')->insert([
        'subject_code'=>'ETME-158',
        'name'=>'Engineering Mechanics Lab',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>2,
          'year'=>1,
    ]);


    DB::table('subjects')->insert([
        'subject_code'=>'ETCS-154',
        'name'=>'Programming Lab',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>2,
          'year'=>1,
    ]);

    DB::table('subjects')->insert([
        'subject_code'=>'ETEN-160',
        'name'=>'Environmental Studies Lab',
        'course_code'=>'Btech',
        'branch'=>'ALL',
        'semester'=>2,
          'year'=>1,
    ]);




}

}
