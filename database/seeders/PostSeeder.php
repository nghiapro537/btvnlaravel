<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            // 'user_id' => 1,
            'title' => "Bai Viet so 1",
            'slug' => 'Bal-vlet-30-20',
            'content' => "huang dan seeder trong lep php",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

