<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lophocphan extends Model
{
     use HasFactory;
    protected $table = 'lophocphans';
    protected $fillable = [
        'maLHP',
        'maKH',
        'maMH',
        'maGV',
        'tenLop',
        'phongHoc',
        'gioHoc',
        'trangThai',
    ];
    public function danhsachsinhvien()
    {
        return $this->hasMany(Danhsachsinhvien::class, 'maLHP', 'maLHP');
    }
}