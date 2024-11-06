<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    use HasFactory;

    // Đặt tên bảng nếu không theo quy tắc mặc định
    protected $table = 'khoas';

    // Đặt khóa chính
    protected $primaryKey = 'maKhoa';

    // Các thuộc tính có thể gán
    protected $fillable = [
        'maKhoa',
        'tenKhoa',
        'trangThai',
    ];

    // Để sử dụng kiểu dữ liệu timestamp
    public $timestamps = false;

    // Nếu cần thiết, thêm các mối quan hệ
    public function nganh()
    {
        return $this->hasMany(Nganh::class, 'maKhoa', 'maKhoa');
    }
}