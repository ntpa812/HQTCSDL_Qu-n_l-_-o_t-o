<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LichthisTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('lichthis')->insert([
            ['maLT' => 'LT01', 'maMH' => 'MH01', 'maGV' => 'GV01', 'caThi' => 'Ca 1', 'phongThi' => 'P201', 'trangThai' => '1'],
            ['maLT' => 'LT02', 'maMH' => 'MH02', 'maGV' => 'GV02', 'caThi' => 'Ca 2', 'phongThi' => 'P202', 'trangThai' => '1'],
            ['maLT' => 'LT03', 'maMH' => 'MH03', 'maGV' => 'GV03', 'caThi' => 'Ca 3', 'phongThi' => 'P203', 'trangThai' => '1'],
            ['maLT' => 'LT04', 'maMH' => 'MH04', 'maGV' => 'GV04', 'caThi' => 'Ca 4', 'phongThi' => 'P204', 'trangThai' => '1'],
            ['maLT' => 'LT05', 'maMH' => 'MH05', 'maGV' => 'GV05', 'caThi' => 'Ca 5', 'phongThi' => 'P205', 'trangThai' => '1'],
            ['maLT' => 'LT06', 'maMH' => 'MH06', 'maGV' => 'GV06', 'caThi' => 'Ca 6', 'phongThi' => 'P206', 'trangThai' => '1'],
            ['maLT' => 'LT07', 'maMH' => 'MH07', 'maGV' => 'GV07', 'caThi' => 'Ca 7', 'phongThi' => 'P207', 'trangThai' => '1'],
            ['maLT' => 'LT08', 'maMH' => 'MH08', 'maGV' => 'GV08', 'caThi' => 'Ca 8', 'phongThi' => 'P208', 'trangThai' => '1'],
            ['maLT' => 'LT09', 'maMH' => 'MH09', 'maGV' => 'GV09', 'caThi' => 'Ca 9', 'phongThi' => 'P209', 'trangThai' => '1'],
            ['maLT' => 'LT10', 'maMH' => 'MH10', 'maGV' => 'GV10', 'caThi' => 'Ca 10', 'phongThi' => 'P210', 'trangThai' => '1'],
        ]);
    }
}
