<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'username' => 'yasuke',
            'mail' => 'rounin@example.com',
            'password' => bcrypt('yasuke97'),
         ]);
    }
}
