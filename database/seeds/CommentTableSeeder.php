// app/database/seeds/CommentTableSeeder.php

<?php
use Illuminate\Database\Seeder;
class CommentTableSeeder extends Seeder
{

public function run()
{
    DB::table('comments')->insert([

        'forum_id'     => 'ETMA-101-1-1',
        'email'    => 'ritesh.bisht93@gmail.com',
        'message' => 'Hello this tutorial is very good!!!',
    ]);

    DB::table('comments')->insert([

        'forum_id'     => 'ETMA-101-1-1',
        'email'    => 'ritesh.bisht93@gmail.com',
        'message' => 'This is amazing!!!',
    ]);
}

}
