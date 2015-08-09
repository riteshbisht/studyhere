// app/database/seeds/UserTableSeeder.php

<?php
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->insert([

        'name'     => 'ritesh bisht',
        'email'    => 'ritesh.bisht93@gmail.com',
        'password' => Hash::make('ritesh'),
    ]);

    DB::table('users')->insert([

        'name'     => 'indu bisht',
        'email'    => 'indubisht@gmail.com',
        'password' => Hash::make('indu'),
    ]);
}

}
