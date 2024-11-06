<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sinhvien;
use App\Models\Khoa;

class Nganh extends Model
{

    // Đặt tên bảng nếu không theo quy tắc mặc định
    protected $table = 'nganhs'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'maNganh'; // Khóa chính
    public $timestamps = false; // Nếu bảng không có trường created_at và updated_at

    protected $fillable = [
        'maNganh',
        'maKhoa',
        'tenNganh',
        'trangThai',
    ];

    public function khoa()
    {
        return $this->belongsTo(Khoa::class, 'maKhoa', 'maKhoa');
    }

    // Mối quan hệ với bảng SinhVien
    public function sinhvien()
    {
        return $this->hasMany(Sinhvien::class, 'maNganh', 'maNganh');
    }
}