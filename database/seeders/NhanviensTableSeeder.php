<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NhanviensTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('nhanviens')->insert([
            ['maNV' => 'NV01', 'hoTen' => 'Nguyễn Văn U', 'ngaySinh' => '1985-01-01', 'diaChi' => '123 Đường U', 'gioiTinh' => 'M', 'sdt' => '0901234567', 'soCCCD' => '123456789012', 'anhThe' => 'anh1', 'donVi' => 'Phòng Đào tạo', 'trangThai' => true],
            ['maNV' => 'NV02', 'hoTen' => 'Trần Thị V', 'ngaySinh' => '1990-02-02', 'diaChi' => '456 Đường V', 'gioiTinh' => 'F', 'sdt' => '0912345678', 'soCCCD' => '234567890123', 'anhThe' => 'anh2', 'donVi' => 'Phòng Kế toán', 'trangThai' => true],
            ['maNV' => 'NV03', 'hoTen' => 'Lê Văn W', 'ngaySinh' => '1982-03-03', 'diaChi' => '789 Đường W', 'gioiTinh' => 'M', 'sdt' => '0923456789', 'soCCCD' => '345678901234', 'anhThe' => 'anh3', 'donVi' => 'Phòng Hành chính', 'trangThai' => true],
            ['maNV' => 'NV04', 'hoTen' => 'Nguyễn Thị X', 'ngaySinh' => '1995-04-04', 'diaChi' => '321 Đường X', 'gioiTinh' => 'F', 'sdt' => '0934567890', 'soCCCD' => '456789012345', 'anhThe' => 'anh4', 'donVi' => 'Phòng Giới thiệu', 'trangThai' => true],
            ['maNV' => 'NV05', 'hoTen' => 'Phạm Văn Y', 'ngaySinh' => '1980-05-05', 'diaChi' => '654 Đường Y', 'gioiTinh' => 'M', 'sdt' => '0945678901', 'soCCCD' => '567890123456', 'anhThe' => 'anh5', 'donVi' => 'Phòng Đào tạo', 'trangThai' => true],
            ['maNV' => 'NV06', 'hoTen' => 'Trần Văn Z', 'ngaySinh' => '1986-06-06', 'diaChi' => '987 Đường Z', 'gioiTinh' => 'M', 'sdt' => '0956789012', 'soCCCD' => '678901234567', 'anhThe' => 'anh6', 'donVi' => 'Phòng Kế hoạch', 'trangThai' => true],
            ['maNV' => 'NV07', 'hoTen' => 'Lê Thị A', 'ngaySinh' => '1989-07-07', 'diaChi' => '234 Đường A', 'gioiTinh' => 'F', 'sdt' => '0967890123', 'soCCCD' => '789012345678', 'anhThe' => 'anh7', 'donVi' => 'Phòng Tổ chức', 'trangThai' => true],
            ['maNV' => 'NV08', 'hoTen' => 'Nguyễn Văn B', 'ngaySinh' => '1992-08-08', 'diaChi' => '567 Đường B', 'gioiTinh' => 'M', 'sdt' => '0978901234', 'soCCCD' => '890123456789', 'anhThe' => 'anh8', 'donVi' => 'Phòng Công tác', 'trangThai' => true],
            ['maNV' => 'NV09', 'hoTen' => 'Lê Văn C', 'ngaySinh' => '1987-09-09', 'diaChi' => '890 Đường C', 'gioiTinh' => 'M', 'sdt' => '0989012345', 'soCCCD' => '901234567890', 'anhThe' => 'anh9', 'donVi' => 'Phòng Hành chính', 'trangThai' => true],
            ['maNV' => 'NV10', 'hoTen' => 'Trần Thị D', 'ngaySinh' => '1994-10-10', 'diaChi' => '111 Đường D', 'gioiTinh' => 'F', 'sdt' => '0990123456', 'soCCCD' => '012345678901', 'anhThe' => 'anh10', 'donVi' => 'Phòng Tổ chức', 'trangThai' => true],
        ]);
        
        
    }
}
