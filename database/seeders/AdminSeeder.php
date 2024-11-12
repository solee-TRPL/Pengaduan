<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Admin 123";
        $user->email = "solihsoleh23@gmail.com";
        $user->password = Hash::make("admin123");
        $user->telp = "089518400826";
        $user->role = "admin";
        $user->save();
    }
}
