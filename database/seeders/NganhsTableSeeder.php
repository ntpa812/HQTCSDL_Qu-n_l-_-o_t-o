<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NganhsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('nganhs')->insert([
            ['maNganh' => 'N01', 'maKhoa' => 'K01', 'tenNganh' => 'Khoa học máy tính', 'trangThai' => '1'],
            ['maNganh' => 'N02', 'maKhoa' => 'K01', 'tenNganh' => 'Mạng máy tính', 'trangThai' => '0'],
            ['maNganh' => 'N03', 'maKhoa' => 'K02', 'tenNganh' => 'Quản trị kinh doanh', 'trangThai' => '1'],
            ['maNganh' => 'N04', 'maKhoa' => 'K02', 'tenNganh' => 'Kinh tế quốc tế', 'trangThai' => '1'],
            ['maNganh' => 'N05', 'maKhoa' => 'K03', 'tenNganh' => 'Luật dân sự', 'trangThai' => '1'],
            ['maNganh' => 'N06', 'maKhoa' => 'K03', 'tenNganh' => 'Luật kinh tế', 'trangThai' => '0'],
            ['maNganh' => 'N07', 'maKhoa' => 'K04', 'tenNganh' => 'Y khoa', 'trangThai' => '1'],
            ['maNganh' => 'N08', 'maKhoa' => 'K04', 'tenNganh' => 'Dược học', 'trangThai' => '0'],
            ['maNganh' => 'N09', 'maKhoa' => 'K05', 'tenNganh' => 'Xã hội học', 'trangThai' => '0'],
            ['maNganh' => 'N10', 'maKhoa' => 'K06', 'tenNganh' => 'Văn học', 'trangThai' => '1'],
        ]);
    }
}
