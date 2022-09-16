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
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Manager',
           'email' => 'manager@gmail.com',
           'password' => Hash::make('12345678'),
           'gender' => 'male',
           'address' => 'Tasmania',
           'account_number' => '123456789',
            'role' => 'staff'
        ]);
    }
}
