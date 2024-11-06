<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ViewSinhVien extends Model
{
    use HasFactory;
    protected $table = 'view_SinhVien'; // Tên view trong cơ sở dữ liệu
    public $timestamps = false; // Bỏ qua timestamps nếu view không có

    // Định nghĩa các thuộc tính nếu cần
    protected $fillable = [
        'maSV',
        'hoTen',
        'tenNganh',
        'tenKhoa',
        'ngaySinh',
        'diaChi',
        'email',
        'sdt'
    ];

    // public function nganhs()
    // {
    //     return $this->belongsTo(Nganh::class, 'maNganh', 'maNganh');
    // }
}