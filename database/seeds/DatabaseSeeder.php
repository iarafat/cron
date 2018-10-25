<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'jon',
            'email' => 'jon@email.com',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'jon 2',
            'email' => 'jon2@email.com',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'jon 3',
            'email' => 'jon3@email.com',
            'password' => bcrypt('password')
        ]);
    }
}
