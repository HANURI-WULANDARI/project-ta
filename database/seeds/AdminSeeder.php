<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Vindi',
            'email' => 'vindi@gmail.com',
            'password' => Hash::make('password1234'),
            'role' => 'admin',
            'jabatan' => 'Operator'
        ]);

        User::create([
            'name' => 'Eko',
            'email' => 'eko@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'jabatan' => 'Operator 2'
        ]);
    }
}
