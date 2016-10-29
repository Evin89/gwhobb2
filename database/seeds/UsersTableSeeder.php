<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
    DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'admin@gwhobby.com',
        'password' => bcrypt('password'),
        'active' => true,
        'created_at' => new dateTime(),
        ]);

    DB::table('users')->insert([
        'name' => 'editor',
        'email' => 'editor@gwhobby.com',
        'password' => bcrypt('password'),
        'active' => true,
        'created_at' => new dateTime(),
        ]);

    DB::table('users')->insert([
        'name' => 'moderator',
        'email' => 'moderator@gwhobby.com',
        'password' => bcrypt('password'),
        'active' => true,
        'created_at' => new dateTime(),
        ]);

}
}
