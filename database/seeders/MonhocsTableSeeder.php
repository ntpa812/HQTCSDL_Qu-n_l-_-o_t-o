<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MonhocsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('monhocs')->insert([
            ['maMH' => 'MH01', 'tenMH' => 'Toán Đại Cương', 'maNganh' => 'N01', 'soTC' => 3, 'trangThai' => '1', 'moTa' => 'Môn học cơ sở của chương trình học', 'deCuong' => '1'],
            ['maMH' => 'MH02', 'tenMH' => 'Lập Trình Web', 'maNganh' => 'N02', 'soTC' => 3, 'trangThai' => '1', 'moTa' => 'Giới thiệu về lập trình web', 'deCuong' => '1'],
            ['maMH' => 'MH03', 'tenMH' => 'Cơ Sở Dữ Liệu', 'maNganh' => 'N01', 'soTC' => 3, 'trangThai' => '1', 'moTa' => 'Nội dung về cơ sở dữ liệu', 'deCuong' => '0'],
            ['maMH' => 'MH04', 'tenMH' => 'Mạng Máy Tính', 'maNganh' => 'N02', 'soTC' => 3, 'trangThai' => '1', 'moTa' => 'Nội dung về mạng máy tính', 'deCuong' => '1'],
            ['maMH' => 'MH05', 'tenMH' => 'Hệ Điều Hành', 'maNganh' => 'N03', 'soTC' => 3, 'trangThai' => '1', 'moTa' => 'Môn học về hệ điều hành', 'deCuong' => '0'],
            ['maMH' => 'MH06', 'tenMH' => 'Phân Tích Thiết Kế Hệ Thống', 'maNganh' => 'N01', 'soTC' => 3, 'trangThai' => '1', 'moTa' => 'Nội dung phân tích hệ thống', 'deCuong' => '0'],
            ['maMH' => 'MH07', 'tenMH' => 'Khoa Học Máy Tính', 'maNganh' => 'N02', 'soTC' => 3, 'trangThai' => '1', 'moTa' => 'Giới thiệu về khoa học máy tính', 'deCuong' => '1'],
            ['maMH' => 'MH08', 'tenMH' => 'Kỹ Thuật Lập Trình', 'maNganh' => 'N03', 'soTC' => 3, 'trangThai' => '1', 'moTa' => 'Kỹ thuật lập trình ứng dụng', 'deCuong' => '1'],
            ['maMH' => 'MH09', 'tenMH' => 'Trí Tuệ Nhân Tạo', 'maNganh' => 'N01', 'soTC' => 3, 'trangThai' => '1', 'moTa' => 'Giới thiệu về trí tuệ nhân tạo', 'deCuong' => '0'],
            ['maMH' => 'MH10', 'tenMH' => 'Học Máy', 'maNganh' => 'N02', 'soTC' => 3, 'trangThai' => '1', 'moTa' => 'Nội dung học máy', 'deCuong' => '1'],
        ]);
    }
}
