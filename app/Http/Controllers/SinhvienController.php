<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewSinhVien;
use App\Models\Khoa;
use App\Models\Nganh;
use App\Models\Sinhvien;    
use Illuminate\Support\Facades\DB;

class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sv = ViewSinhVien::paginate(10);
        return view('sinhviens.index', compact('sv'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ng = [
            ['maNganh' => 'N01', 'maKhoa' => 'K01', 'tenNganh' => 'Khoa học máy tính', 'trangThai' => '1'],
            ['maNganh' => 'N02', 'maKhoa' => 'K01', 'tenNganh' => 'Mạng máy tính', 'trangThai' => '0'],
            ['maNganh' => 'N03', 'maKhoa' => 'K02', 'tenNganh' => 'Quản trị kinh doanh', 'trangThai' => '1'],
            ['maNganh' => 'N04', 'maKhoa' => 'K02', 'tenNganh' => 'Kinh tế quốc tế', 'trangThai' => '1'],
            ['maNganh' => 'N05', 'maKhoa' => 'K03', 'tenNganh' => 'Luật dân sự', 'trangThai' => '1'],
            ['maNganh' => 'N06', 'maKhoa' => 'K03', 'tenNganh' => 'Luật kinh tế', 'trangThai' => '0'],
            ['maNganh' => 'N07', 'maKhoa' => 'K04', 'tenNganh' => 'Y khoa', 'trangThai' => '1'],
            ['maNganh' => 'N08', 'maKhoa' => 'K04', 'tenNganh' => 'Dược học', 'trangThai' => '0'],
            ['maNganh' => 'N09', 'maKhoa' => 'K05', 'tenNganh' => 'Xã hội học', 'trangThai' => '0'],
            ['maNganh' => 'N10', 'maKhoa' => 'K06', 'tenNganh' => 'Văn học', 'trangThai' => '1'],
        ];
        return view('sinhviens.create', compact('ng'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'maSV' => 'required',
            'maNganh' => 'required|exists:nganhs,maNganh',
            'hoTen' => 'required',
            'ngaySinh' => 'required|date',
            'queQuan' => 'required',
            'gioiTinh' => 'required|in:M,F',
            'diaChi' => 'required',
            'email' => 'required|email',
            'tenDN' => 'required',
            'matKhau' => 'required',
            'soCCCD' => 'required',
            'anhThe' => 'required',
            'sdt' => 'required',
            'khoaHoc' => 'required|integer',
            'trangThai' => 'required|in:1,0',
        ]);

        // Gọi stored procedure để thêm sinh viên mới
        DB::statement('CALL proc_ThemSinhVien(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            $request->maSV,
            $request->maNganh,
            $request->hoTen,
            $request->ngaySinh,
            $request->queQuan,
            $request->gioiTinh,
            $request->diaChi,
            $request->email,
            $request->tenDN,
            bcrypt($request->matKhau),
            $request->soCCCD,
            $request->anhThe,
            $request->sdt,
            $request->khoaHoc,
            $request->trangThai
        ]);

        return redirect()->route('sinhviens.index')->with('success', 'Sinh viên được tạo thành công.');
    }

    public function search(Request $request)
    {
        $request->validate([
            'maSV' => 'required|string|max:10',
        ]);

        $maSV = $request->input('maSV');

        // Gọi hàm để lấy họ tên sinh viên
        $hoTen = DB::select('SELECT func_LayHoTenSinhVienID(?) AS hoTen', [$maSV]);

        // Kiểm tra xem có kết quả không
        if (empty($hoTen[0]->hoTen)) {
            return redirect()->route('sinhviens.index')->with('error', 'Sinh viên không tồn tại.');
        }

        // Chuyển hướng đến phương thức show với mã sinh viên
        return redirect()->route('sinhviens.show', ['id' => $maSV]);
    }

    public function show($id)
    {
        // Tìm sinh viên theo maSV
        $sinhVien = Sinhvien::where('maSV', $id)->first();

        if (!$sinhVien) {
            return redirect()->route('sinhviens.index')->with('error', 'Sinh viên không tồn tại.');
        }

        // Trả về view hiển thị thông tin sinh viên
        return view('sinhviens.show', compact('sinhVien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id)
    // {
    //     $sv = Sinhvien::find($id);
    //     $ng = Nganh::all();

    //     return view('sinhviens.edit', compact('sv', 'ng'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'MANGANH' => 'required',
    //         'HOTEN' => 'required',
    //         'NGAYSINH' => 'required|date',
    //         'QUEQUAN' => 'required',
    //         'GIOITINH' => 'required',
    //         'DIACHI' => 'required',
    //         'EMAIL' => 'required|email',
    //         'TENDN' => 'required',
    //         'MATKHAU' => 'required',
    //         'SOCCCD' => 'required',
    //         'KHOAHOC' => 'required|integer',
    //     ]);

    //     $sv = Sinhvien::find($id);
    //     $sv->update($request->all());

    //     return redirect()->route('sinhviens.index')->with('success', 'Sinh viên được cập nhật thành công.');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy($id)
    // {
    //     $sv = Sinhvien::find($id);
    //     $sv->delete();

    //     return redirect()->route('sinhviens.index')->with('success', 'Sinh viên được xóa thành công.');
    // }
}