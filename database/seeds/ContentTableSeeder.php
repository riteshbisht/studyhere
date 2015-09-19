// app/database/seeds/ContentTableSeeder.php

<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{

public function run()
{
    DB::table('contents')->insert([

        'subtopic_code'=>'ETMA-101-1-1',
        'content' => '',
        'source'=>'notes/maths/Leibnitz/source1/',
        'urlofcloud'=>'',
        'noofimages'=>3,
    ]);

    DB::table('contents')->insert([

        'subtopic_code'=>'ETMA-101-1-1',
        'content'=> '',
        'source'=>'notes/math/Leibnitz/source2/',
        'urlofcloud'=>'',
        'noofimages'=>3
    ]);

    DB::table('contents')->insert([

        'subtopic_code'=>'ETMA-101-1-1',
        'content'=> '',
        'source'=>'notes/math/Leibnitz/source3/',
        'urlofcloud'=>'',
        'noofimages'=>3
    ]);
}

}
