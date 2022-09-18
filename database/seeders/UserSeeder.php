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
           'name' => 'Poonam',
           'email' => 'poonam@gmailmanger.com',
           'password' => Hash::make('12345678'),
           'gender' => 'Female',
           'address' => 'TAS',
           'account_number' => '0123456',
            'role' => 1
        ]);
    }
}
