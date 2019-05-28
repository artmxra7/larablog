<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelaminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kelamins')->insert([
            'kelamin' => 'Pria',
            'slug' => 'Pria',

        ]);

        DB::table('kelamins')->insert([
            'kelamin' => 'Wanita',
            'slug' => 'Wanita',

        ]);
    }
}
