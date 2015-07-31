// app/database/seeds/UniversityTableSeeder.php

<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UniversityTableSeeder extends Seeder
{

public function run()
{
    DB::table('universities')->insert([

        'university_code'=>'IPU',
        'name'     => 'Guru Gobind Singh University',
    ]);
}

}
