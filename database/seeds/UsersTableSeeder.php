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
        App\User::create([
          'name' => 'blog',
          'email' => 'blog@gmail.com',
          'password' => bcrypt(123456),
        ]);
    }
}
