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
            'phone'=>'1200758970',
            'location'=>'Cairo , Egypt',
            'logo'=>'images/logo.png',
            'icon'=>'images/favicon.ico',
            'link'=>'https://www.queentechsolutions.net/',
            'facebook'=>'https://www.facebook.com/QTechS',
        ]);

    }
}

