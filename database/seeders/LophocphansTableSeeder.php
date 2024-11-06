<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LophocphansTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('lophocphans')->insert([
            ['maLHP' => 'LHP01', 'maKH' => 'KH01', 'maMH' => 'MH01', 'maGV' => 'GV01', 'tenLop' => 'Lớp 1 Toán', 'phongHoc' => 'P101', 'gioHoc' => '08:00:00', 'trangThai' => '1'],
            ['maLHP' => 'LHP02', 'maKH' => 'KH02', 'maMH' => 'MH02', 'maGV' => 'GV02', 'tenLop' => 'Lớp 2 Vật lý', 'phongHoc' => 'P102', 'gioHoc' => '10:00:00', 'trangThai' => '1'],
            ['maLHP' => 'LHP03', 'maKH' => 'KH03', 'maMH' => 'MH03', 'maGV' => 'GV03', 'tenLop' => 'Lớp 3 Hóa học', 'phongHoc' => 'P103', 'gioHoc' => '12:00:00', 'trangThai' => '1'],
            ['maLHP' => 'LHP04', 'maKH' => 'KH04', 'maMH' => 'MH04', 'maGV' => 'GV04', 'tenLop' => 'Lớp 4 Triết học', 'phongHoc' => 'P104', 'gioHoc' => '14:00:00', 'trangThai' => '1'],
            ['maLHP' => 'LHP05', 'maKH' => 'KH05', 'maMH' => 'MH05', 'maGV' => 'GV05', 'tenLop' => 'Lớp 5 Lịch sử', 'phongHoc' => 'P105', 'gioHoc' => '16:00:00', 'trangThai' => '1'],
            ['maLHP' => 'LHP06', 'maKH' => 'KH06', 'maMH' => 'MH06', 'maGV' => 'GV06', 'tenLop' => 'Lớp 6 Giải tích', 'phongHoc' => 'P106', 'gioHoc' => '08:00:00', 'trangThai' => '1'],
            ['maLHP' => 'LHP07', 'maKH' => 'KH07', 'maMH' => 'MH07', 'maGV' => 'GV07', 'tenLop' => 'Lớp 7 Xác suất', 'phongHoc' => 'P107', 'gioHoc' => '10:00:00', 'trangThai' => '1'],
            ['maLHP' => 'LHP08', 'maKH' => 'KH08', 'maMH' => 'MH08', 'maGV' => 'GV08', 'tenLop' => 'Lớp 8 Kỹ thuật phần mềm', 'phongHoc' => 'P108', 'gioHoc' => '12:00:00', 'trangThai' => '1'],
            ['maLHP' => 'LHP09', 'maKH' => 'KH09', 'maMH' => 'MH09', 'maGV' => 'GV09', 'tenLop' => 'Lớp 9 Hệ điều hành', 'phongHoc' => 'P109', 'gioHoc' => '14:00:00', 'trangThai' => '1'],
            ['maLHP' => 'LHP10', 'maKH' => 'KH10', 'maMH' => 'MH10', 'maGV' => 'GV10', 'tenLop' => 'Lớp 10 Cơ sở dữ liệu', 'phongHoc' => 'P110', 'gioHoc' => '16:00:00', 'trangThai' => '1'],
        ]);
    }
}
