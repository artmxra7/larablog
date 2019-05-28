<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Erwin Rahayu',
            'username' => 'admin',
            'email' => 'artmxarea@gmail.com',
            'password' => bcrypt('Asdf1234'),
            'kelamin' => '1',

        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Author',
            'username' => 'author',
            'email' => 'author@gmail.com',
            'password' => bcrypt('Asdf1234'),
            'kelamin' => '1',

        ]);
    }
}
