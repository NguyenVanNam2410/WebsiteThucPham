<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class categoryNew extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_news')->insert([
            [
                'name' => 'Kinh nghiệm chọn thực phẩm',
            ],
            [
                'name' => 'Kinh nghiệm chọn thực phẩm',
            ]
        ]);
    }
}
