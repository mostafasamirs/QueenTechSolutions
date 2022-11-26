<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('123456789'),
            'image'=>'userimage/avataaars.png',
            'phone'=>'123456789',
            'lang'=>'en',
            'address'=>'cairo',
            'created_by'=>'admin',
        ]);
        User::create([
            'name'=>'admin',
            'email'=>'user@admin.com',
            'password'=>Hash::make('mostafa01144999586'),
            'image'=>'userimage/avataaars.png',
            'phone'=>'12345678963',
            'lang'=>'en',
            'address'=>'cairo',
            'created_by'=>'admin',
        ]);
    }
}
