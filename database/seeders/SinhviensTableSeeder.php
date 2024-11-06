<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SinhviensTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('sinhviens')->insert([
            ['maSV' => 'SV01', 'maNganh' => 'N01', 'hoTen' => 'Nguyễn Văn A', 'ngaySinh' => '2000-01-01', 'queQuan' => 'Hà Nội', 'gioiTinh' => 'M', 'diaChi' => '123 Đường A', 'email' => 'nguyenvana@example.com', 'tenDN' => 'nguyenvana', 'matKhau' => bcrypt('password'), 'soCCCD' => '123456789012', 'anhThe' => 'anh1', 'sdt' => '0987654321', 'khoaHoc' => 2020, 'trangThai' => '1'],
            ['maSV' => 'SV02', 'maNganh' => 'N01', 'hoTen' => 'Trần Thị B', 'ngaySinh' => '2001-02-02', 'queQuan' => 'Hải Phòng', 'gioiTinh' => 'F', 'diaChi' => '456 Đường B', 'email' => 'tranthib@example.com', 'tenDN' => 'tranthib', 'matKhau' => bcrypt('password'), 'soCCCD' => '234567890123', 'anhThe' => 'anh2', 'sdt' => '0978643210', 'khoaHoc' => 2021, 'trangThai' => '1'],
            ['maSV' => 'SV03', 'maNganh' => 'N02', 'hoTen' => 'Lê Văn C', 'ngaySinh' => '2000-03-03', 'queQuan' => 'Đà Nẵng', 'gioiTinh' => 'M', 'diaChi' => '789 Đường C', 'email' => 'levanc@example.com', 'tenDN' => 'levanc', 'matKhau' => bcrypt('password'), 'soCCCD' => '345678901234', 'anhThe' => 'anh3', 'sdt' => '0965432187', 'khoaHoc' => 2020, 'trangThai' => '0'],
            ['maSV' => 'SV04', 'maNganh' => 'N02', 'hoTen' => 'Phạm Thị D', 'ngaySinh' => '2001-04-04', 'queQuan' => 'Hải Dương', 'gioiTinh' => 'F', 'diaChi' => '321 Đường D', 'email' => 'phamthid@example.com', 'tenDN' => 'phamthid', 'matKhau' => bcrypt('password'), 'soCCCD' => '456789012345', 'anhThe' => 'anh4', 'sdt' => '0956123456', 'khoaHoc' => 2021, 'trangThai' => '0'],
            ['maSV' => 'SV05', 'maNganh' => 'N03', 'hoTen' => 'Trần Văn E', 'ngaySinh' => '2000-05-05', 'queQuan' => 'Nam Định', 'gioiTinh' => 'M', 'diaChi' => '654 Đường E', 'email' => 'tranve@example.com', 'tenDN' => 'tranve', 'matKhau' => bcrypt('password'), 'soCCCD' => '567890123456', 'anhThe' => 'anh5', 'sdt' => '0945678901', 'khoaHoc' => 2020, 'trangThai' => '0'],
            ['maSV' => 'SV06', 'maNganh' => 'N03', 'hoTen' => 'Nguyễn Thị F', 'ngaySinh' => '2001-06-06', 'queQuan' => 'Thái Bình', 'gioiTinh' => 'F', 'diaChi' => '543 Đường F', 'email' => 'nguyenthif@example.com', 'tenDN' => 'nguyenthif', 'matKhau' => bcrypt('password'), 'soCCCD' => '678901234567', 'anhThe' => 'anh6', 'sdt' => '0934567890', 'khoaHoc' => 2021, 'trangThai' => '1'],
            ['maSV' => 'SV07', 'maNganh' => 'N04', 'hoTen' => 'Lê Văn G', 'ngaySinh' => '2000-07-07', 'queQuan' => 'Ninh Bình', 'gioiTinh' => 'M', 'diaChi' => '432 Đường G', 'email' => 'levang@example.com', 'tenDN' => 'levang', 'matKhau' => bcrypt('password'), 'soCCCD' => '789012345678', 'anhThe' => 'anh7', 'sdt' => '0923456789', 'khoaHoc' => 2020, 'trangThai' => '1'],
            ['maSV' => 'SV08', 'maNganh' => 'N04', 'hoTen' => 'Trần Thị H', 'ngaySinh' => '2001-08-08', 'queQuan' => 'Hà Tĩnh', 'gioiTinh' => 'F', 'diaChi' => '321 Đường H', 'email' => 'tranthih@example.com', 'tenDN' => 'tranthih', 'matKhau' => bcrypt('password'), 'soCCCD' => '890123456789', 'anhThe' => 'anh8', 'sdt' => '0912345678', 'khoaHoc' => 2021, 'trangThai' => '0'],
            ['maSV' => 'SV09', 'maNganh' => 'N05', 'hoTen' => 'Nguyễn Văn I', 'ngaySinh' => '2000-09-09', 'queQuan' => 'Quảng Ninh', 'gioiTinh' => 'M', 'diaChi' => '210 Đường I', 'email' => 'nguyenvani@example.com', 'tenDN' => 'nguyenvani', 'matKhau' => bcrypt('password'), 'soCCCD' => '901234567890', 'anhThe' => 'anh9', 'sdt' => '0901234567', 'khoaHoc' => 2020, 'trangThai' => '1'],
            ['maSV' => 'SV10', 'maNganh' => 'N05', 'hoTen' => 'Lê Thị J', 'ngaySinh' => '2001-10-10', 'queQuan' => 'Hà Giang', 'gioiTinh' => 'F', 'diaChi' => '876 Đường J', 'email' => 'lethij@example.com', 'tenDN' => 'lethij', 'matKhau' => bcrypt('password'), 'soCCCD' => '012345678901', 'anhThe' => 'anh10', 'sdt' => '0890123456', 'khoaHoc' => 2021, 'trangThai' => '1'],
        ]);
    }
}
