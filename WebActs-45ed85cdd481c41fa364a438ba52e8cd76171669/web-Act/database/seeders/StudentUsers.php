<?php

namespace Database\Seeders;

use App\Models\StudentUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        StudentUser::create([
            'name' => 'Navs',
            'email' => 'navs@gmail.com',
            'age' => 20]);
    }
}
