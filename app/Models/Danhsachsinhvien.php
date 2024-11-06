<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Danhsachsinhvien extends Model
{
    protected $table = 'danhsachsinhviens'; // Tên bảng
    protected $primaryKey = ['maLHP', 'maSV'];
    public $incrementing = false; 
    protected $keyType = 'string'; 
    protected $fillable = ['maLHP', 'maSV', 'diemQT', 'diemThi'];
    public $timestamps = false;

    public function lophocphan()
    {
        return $this->belongsTo(Lophocphan::class, 'maLHP', 'maLHP');
    }

    public function sinhvien()
    {
        return $this->belongsTo(Sinhvien::class, 'maSV', 'maSV');
    }


}