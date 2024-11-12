<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "User 123";
        $user->email = "solihsoleh12@gmail.com";
        $user->password = Hash::make("user1234");
        $user->telp = '12345678';
        $user->role = 'user';
        $user->save();
    }
}