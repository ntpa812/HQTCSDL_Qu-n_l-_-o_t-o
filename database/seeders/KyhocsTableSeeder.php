<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KyhocsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kyhocs')->insert([
            ['maKH' => 'KH01', 'namHoc' => 2024, 'kyHoc' => 1, 'trangThai' => '1'],
            ['maKH' => 'KH02', 'namHoc' => 2024, 'kyHoc' => 2, 'trangThai' => '1'],
            ['maKH' => 'KH03', 'namHoc' => 2024, 'kyHoc' => 3, 'trangThai' => '1'],
            ['maKH' => 'KH04', 'namHoc' => 2024, 'kyHoc' => 4, 'trangThai' => '1'],
            ['maKH' => 'KH05', 'namHoc' => 2025, 'kyHoc' => 1, 'trangThai' => '1'],
            ['maKH' => 'KH06', 'namHoc' => 2025, 'kyHoc' => 2, 'trangThai' => '1'],
            ['maKH' => 'KH07', 'namHoc' => 2025, 'kyHoc' => 3, 'trangThai' => '1'],
            ['maKH' => 'KH08', 'namHoc' => 2025, 'kyHoc' => 4, 'trangThai' => '1'],
            ['maKH' => 'KH09', 'namHoc' => 2026, 'kyHoc' => 1, 'trangThai' => '1'],
            ['maKH' => 'KH10', 'namHoc' => 2026, 'kyHoc' => 2, 'trangThai' => '1'],
        ]);
        
    }
}
