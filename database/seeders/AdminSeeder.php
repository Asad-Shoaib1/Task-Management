<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $password = 'password';
        User::create([
             'name' => 'admin',
             'email' => 'admin@gmail.com',
             'email_verified_at' => now(),
             'password' => Hash::make($password),
 
         ])->assignRole('admin');
        $password = 'password';
        User::create([
             'name' => 'user',
             'email' => 'user@gmail.com',
             'email_verified_at' => now(),
             'password' => Hash::make($password),
 
         ])->assignRole('user');
         $password = 'password';
        User::create([
             'name' => 'manager',
             'email' => 'manager@gmail.com',
             'email_verified_at' => now(),
             'password' => Hash::make($password),
 
        ])->assignRole(['manager', 'admin']);
    }
}
