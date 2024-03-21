<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //追記

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert(
            [
                [
                    'title' => 'テスト1',
                    'text' => 'テスト1の内容',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'テスト2',
                    'text' => 'テスト2の内容',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}
