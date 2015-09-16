// app/database/seeds/ForumTableSeeder.php

<?php
use Illuminate\Database\Seeder;
class ForumTableSeeder extends Seeder
{

public function run()
{
    DB::table('forums')->insert([

        'forum_id'     => 'ETMA-101-1-1',
        'forum_name'    => 'leibinitz theorem',
    ]);
}

}
