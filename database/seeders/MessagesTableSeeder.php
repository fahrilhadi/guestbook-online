<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('messages')->insert([
            [
                'name' => 'John Doe',
                'message' => 'Great website! Keep up the good work.',
                'created_at' => Carbon::now()->subMinutes(30),
                'updated_at' => Carbon::now()->subMinutes(30),
            ],
            [
                'name' => 'Jane Smith',
                'message' => 'Hello! I just discovered this guestbook.',
                'created_at' => Carbon::now()->subMinutes(20),
                'updated_at' => Carbon::now()->subMinutes(20),
            ],
            [
                'name' => 'Michael Lee',
                'message' => 'This project is awesome! Love the clean design.',
                'created_at' => Carbon::now()->subMinutes(10),
                'updated_at' => Carbon::now()->subMinutes(10),
            ],
        ]);
    }
}
