<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'name'=>'Lorem Ipsum 1',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and 1',
            'file'=>'images/logo.png',
        ]);
        Task::create([
            'name'=>'Lorem Ipsum 2',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and 2',
            'file'=>'images/logo.png',
        ]);
        Task::create([
            'name'=>'Lorem Ipsum 3',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and 3',
            'file'=>'images/logo.png',
        ]);
        Task::create([
            'name'=>'Lorem Ipsum 4',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and 4',
            'file'=>'images/logo.png',
        ]);
        Task::create([
            'name'=>'Lorem Ipsum 5',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and 5',
            'file'=>'images/logo.png',
        ]);
        Task::create([
            'name'=>'Lorem Ipsum 6',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and 6',
            'file'=>'images/logo.png',
        ]);
        Task::create([
            'name'=>'Lorem Ipsum 7',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and 7',
            'file'=>'images/logo.png',
        ]);
        Task::create([
            'name'=>'Lorem Ipsum 8',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and 8',
            'file'=>'images/logo.png',
        ]);
        Task::create([
            'name'=>'Lorem Ipsum 9',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and 9',
            'file'=>'images/logo.png',
        ]);
        Task::create([
            'name'=>'Lorem Ipsum 10',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and 10',
            'file'=>'images/logo.png',
        ]);
        Task::create([
            'name'=>'Lorem Ipsum 11',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and 11',
            'file'=>'images/logo.png',
        ]);
    }
}
