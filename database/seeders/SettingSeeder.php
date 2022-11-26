<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'title'=>'queentechsolutions',
            'description'=>'queentechsolutions',
            'email'=>'info@queentechsolutions.com',
            'phone'=>'',
            'location'=>'Cairo , Egypt',
            'logo'=>'images/logo.png',
            'icon'=>'images/favicon.ico',
            'link'=>'',
            'facebook'=>'',
        ]);

    }
}

