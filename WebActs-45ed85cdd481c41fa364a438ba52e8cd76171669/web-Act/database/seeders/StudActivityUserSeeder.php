<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudentActs;
use Illuminate\Support\Facades\Hash;


class StudActivityUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        StudentActs::create([
            'name' => 'navs',
            'email' => 'navs@gmail.com',
            'age' => 20,
            'password' => Hash::make('password123')]);


    }
}
