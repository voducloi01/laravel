<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 3; $i++) {
            DB::table('posts')->insert([
                'title' => Str::random(20),
                'description' => Str::random(20),
                'status' => 1,
                'published_at' => date('Y-m-d'),
                'userid' => 1,
            ]);
        }
    }
}
