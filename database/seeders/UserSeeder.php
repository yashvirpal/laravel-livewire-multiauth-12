<?php

namespace Database\Seeders;

use App\Enums\UserRole;
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
        User::create([
            'name'=>"Admin",
            'email'=>"admin@localhost.com",
            'role'=>UserRole::Admin,
            'password'=>Hash::make('password')
        ]);
        User::create([
            'name'=>"User",
            'email'=>"user@localhost.com",
            'role'=>UserRole::User,
            'password'=>Hash::make('password')
        ]);
    }
}
