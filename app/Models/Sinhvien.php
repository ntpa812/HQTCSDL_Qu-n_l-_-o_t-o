<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nganh;


class Sinhvien extends Model
{
    use HasFactory;

    protected $table = 'sinhviens'; // Tên bảng trong CSDL
    protected $primaryKey = 'maSV';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'maSV', 'maNganh', 'hoTen', 'ngaySinh', 'queQuan', 'gioiTinh', 
        'diaChi', 'email', 'tenDN', 'matKhau', 'soCCCD', 'anhThe', 
        'sdt', 'khoaHoc', 'trangThai'
    ];

    public function nganhs()
    {
        return $this->belongsTo(Nganh::class, 'maNganh', 'maNganh');
    }


}