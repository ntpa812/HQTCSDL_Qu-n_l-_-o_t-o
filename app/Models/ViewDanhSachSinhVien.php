<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewDanhSachSinhVien extends Model
{
    use HasFactory;
    protected $table = 'ViewDanhSachSinhVien';
    public $timestamps = false; 
    protected $fillable = ['maLHP', 'maSV', 'hoTen', 'diemQT', 'diemThi'];
}
