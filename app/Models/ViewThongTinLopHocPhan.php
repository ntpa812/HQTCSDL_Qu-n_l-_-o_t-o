<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViewThongTinLopHocPhan extends Model
{
    // Tên bảng view trong cơ sở dữ liệu
    protected $table = 'v_ThongTinLopHocPhan';

    // Khóa chính nếu view không có thì bạn có thể bỏ qua
    // protected $primaryKey = 'maLHP';

    // Nếu view không có timestamps (created_at, updated_at)
    public $timestamps = false;

    // Định nghĩa các trường có thể điền được (optional nếu bạn muốn đặt trường nào có thể mass assignable)
    protected $fillable = [
        'maLHP',
        'tenLop',
        'phongHoc',
        'gioHoc',
        'trangThaiLop',
        'tenMH',
        'soTC',
        'tenGiangVien',
        'emailGiangVien',
        'namHoc',
        'kyHoc',
        'trangThaiKyHoc',
        'maSV',
        'tenSinhVien',
        'diemQT',
        'diemThi',
    ];
}