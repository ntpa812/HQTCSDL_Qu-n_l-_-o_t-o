<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DanhsachsinhviensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danhsachsinhviens')->insert([
            ['maLHP' => 'LHP01', 'maSV' => 'SV01', 'diemQT' => 8.5, 'diemThi' => 9.0],
            ['maLHP' => 'LHP02', 'maSV' => 'SV02', 'diemQT' => 7.0, 'diemThi' => 7.5],
            ['maLHP' => 'LHP03', 'maSV' => 'SV03', 'diemQT' => 6.0, 'diemThi' => 6.5],
            ['maLHP' => 'LHP04', 'maSV' => 'SV04', 'diemQT' => 9.0, 'diemThi' => 8.5],
            ['maLHP' => 'LHP05', 'maSV' => 'SV05', 'diemQT' => 5.5, 'diemThi' => 6.0],
            ['maLHP' => 'LHP06', 'maSV' => 'SV06', 'diemQT' => 8.0, 'diemThi' => 8.0],
            ['maLHP' => 'LHP07', 'maSV' => 'SV07', 'diemQT' => 7.5, 'diemThi' => 7.0],
            ['maLHP' => 'LHP08', 'maSV' => 'SV08', 'diemQT' => 6.5, 'diemThi' => 7.0],
            ['maLHP' => 'LHP09', 'maSV' => 'SV09', 'diemQT' => 9.5, 'diemThi' => 9.0],
            ['maLHP' => 'LHP10', 'maSV' => 'SV10', 'diemQT' => 5.0, 'diemThi' => 5.5],
        ]);
    }
}
