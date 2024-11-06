<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhoasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('khoas')->insert([
            ['maKhoa' => 'K01', 'tenKhoa' => 'Công nghệ thông tin', 'trangThai' => '1'],
            ['maKhoa' => 'K02', 'tenKhoa' => 'Kinh tế', 'trangThai' => '0'],
            ['maKhoa' => 'K03', 'tenKhoa' => 'Luật', 'trangThai' => '1'],
            ['maKhoa' => 'K04', 'tenKhoa' => 'Y học', 'trangThai' => '0'],
            ['maKhoa' => 'K05', 'tenKhoa' => 'Xã hội học', 'trangThai' => '0'],
            ['maKhoa' => 'K06', 'tenKhoa' => 'Văn hóa học', 'trangThai' => '1'],
            ['maKhoa' => 'K07', 'tenKhoa' => 'Ngôn ngữ học', 'trangThai' => '0'],
            ['maKhoa' => 'K08', 'tenKhoa' => 'Kỹ thuật xây dựng', 'trangThai' => '1'],
            ['maKhoa' => 'K09', 'tenKhoa' => 'Hóa học', 'trangThai' => '1'],
            ['maKhoa' => 'K10', 'tenKhoa' => 'Sinh học', 'trangThai' => '1'],
        ]);
    }
}
