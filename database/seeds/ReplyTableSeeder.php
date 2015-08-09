// app/database/seeds/ReplyTableSeeder.php

<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ReplyTableSeeder extends Seeder
{

public function run()
{
    DB::table('replies')->insert([

        'comment_id'=>'1',
        'email' => 'ritesh.bisht93@gmail.com',
        'message'=>'yeah you are right!!',
    ]);

}

}
