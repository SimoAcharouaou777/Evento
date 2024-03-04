<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = 'azertyuiop';
        $hashedPassword = Hash::make($password);
        $user = User::create([
            'username' => 'ahmed',
            'email' => 'ahmed@gmail.com',
            'password'=> $hashedPassword,
        ]);
        $user->roles()->attach([1]);
    }
}
