<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'              => 'Huy Hoàng',
            'email'             => 'huyhoang@gmail.com',
            'password'          => Hash::make('1234'),
            'role'              => "user",
        ]);
        User::create([
            'name'              => 'Admin',
            'email'             => 'admin@gmail.com',
            'password'          => Hash::make('1234'),
            'role'              => "admin",
        ]);
    }
}
