<?php

namespace App\Http\Controllers;

use App\Models\Danhsachsinhvien;
use Illuminate\Http\Request;
use App\Models\Sinhvien; 
use App\Models\ViewDanhSachSinhVien;
use App\Models\ViewThongTinLopHocPhan;
use App\Models\Lophocphan;
use Illuminate\Support\Facades\DB;
use Exception;
class DanhsachsinhvienController extends Controller
{
    public function index()
    {
        $lhps = ViewThongTinLopHocPhan::paginate(5);
        return view('danhsachsinhviens.index', compact('lhps'));
    }

    public function show($maLHP)
    {
        $danhsachsinhviens = ViewDanhSachSinhVien::where('maLHP', $maLHP)->paginate(10);
        return view('danhsachsinhviens.show', compact('danhsachsinhviens'));
    }
    // public function create()
    // {
    //     $lopHocPhans = Lophocphan::with('danhsachsinhvien')->get();
    //     $sinhViens = Sinhvien::all();
    //     return view('danhsachsinhviens.create', compact('lopHocPhans', 'sinhViens'));
    // }

    public function create()
    {
        $lopHocPhans = Lophocphan::with(['danhsachsinhvien.sinhvien'])->get(); // Lấy sinh viên kèm theo thông tin của họ
        
        return view('danhsachsinhviens.create', compact('lopHocPhans'));
    }
  
    public function store(Request $request)
{
    $request->validate([
        'maLHP' => 'required|exists:lophocphans,maLHP',
        'maSV' => 'required|exists:sinhviens,maSV',
        'diemQT' => 'required|numeric|min:0|max:10',
        'diemThi' => 'required|numeric|min:0|max:10',
    ]);

    try {
        // Kiểm tra xem sinh viên đã có điểm trong lớp học phần cụ thể hay không
        $existingRecord = Danhsachsinhvien::where('maLHP', $request->maLHP)
                                            ->where('maSV', $request->maSV)
                                            ->first();

        if ($existingRecord) {
            // Nếu đã tồn tại, cập nhật điểm
            $existingRecord->diemQT = (float)$request->diemQT;  // Đảm bảo kiểu dữ liệu
            $existingRecord->diemThi = (float)$request->diemThi; // Đảm bảo kiểu dữ liệu
            $existingRecord->save();
        } else {
            // Nếu chưa tồn tại, chèn vào
            Danhsachsinhvien::create([
                'maLHP' => $request->maLHP,
                'maSV' => $request->maSV,
                'diemQT' => (float)$request->diemQT, // Đảm bảo kiểu dữ liệu
                'diemThi' => (float)$request->diemThi, // Đảm bảo kiểu dữ liệu
            ]);
        }

        return redirect()->route('danhsachsinhviens.index')->with('success', 'Thêm sinh viên vào danh sách thành công.');
    } catch (\Illuminate\Database\QueryException $e) {
        // Bắt lỗi từ MySQL và chuyển nó về view
        $errorMessage = $e->getMessage();

        return redirect()->back()->withErrors(['error' => $errorMessage]);
    }
}





    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'maLHP' => 'required|exists:lophocphans,maLHP',
    //         'maSV' => 'required|exists:sinhviens,maSV',
    //         'diemQT' => 'required|numeric|min:0|max:10',
    //         'diemThi' => 'required|numeric|min:0|max:10',
    //     ], [
    //         'maLHP.required' => 'Vui lòng chọn Mã LHP.',
    //         'maLHP.exists' => 'Mã LHP không hợp lệ.',
    //         'maSV.required' => 'Vui lòng chọn Mã Sinh Viên.',
    //         'maSV.exists' => 'Mã Sinh Viên không hợp lệ.',
    //         'diemQT.required' => 'Vui lòng nhập Điểm Quá Trình.',
    //         'diemQT.numeric' => 'Điểm Quá Trình phải là số.',
    //         'diemQT.min' => 'Điểm Quá Trình không được nhỏ hơn 0.',
    //         'diemQT.max' => 'Điểm Quá Trình không được lớn hơn 10.',
    //         'diemThi.required' => 'Vui lòng nhập Điểm Thi.',
    //         'diemThi.numeric' => 'Điểm Thi phải là số.',
    //         'diemThi.min' => 'Điểm Thi không được nhỏ hơn 0.',
    //         'diemThi.max' => 'Điểm Thi không được lớn hơn 10.',
    //     ]);
    //     Danhsachsinhvien::create([
    //         'maLHP' => $request->maLHP,
    //         'maSV' => $request->maSV,
    //         'diemQT' => $request->diemQT,
    //         'diemThi' => $request->diemThi,
    //     ]);

    //     return redirect()->route('danhsachsinhviens.index')->with('success', 'Thêm sinh viên vào danh sách thành công.');
    // }

    // public function destroy(Danhsachsinhvien $danhsachsinhvien)
    // {
    //     $danhsachsinhvien->delete();
    //     return redirect()->route('danhsachsinhviens.index')->with('success', 'Xóa sinh viên thành công!');
    // }
    public function totalize($maSV)
    {
        $sinhVien = Danhsachsinhvien::select('dssv.maLHP', 'sv.maSV', 'sv.hoTen', 'dssv.diemQT', 'dssv.diemThi')
            ->from('danhsachsinhviens as dssv')
            ->join('sinhviens as sv', 'dssv.maSV', '=', 'sv.maSV')
            ->where('dssv.maSV', $maSV)
            ->first();

        if (!$sinhVien) {
            return redirect()->back()->with('error', 'Sinh viên không tồn tại.');
        }

        // Tính điểm tổng kết
        $diemTongKet = ($sinhVien->diemQT * 0.4) + ($sinhVien->diemThi * 0.6);

        // Trả về view với dữ liệu sinh viên và điểm tổng kết
        return view('danhsachsinhviens.totalize', compact('sinhVien', 'diemTongKet'));
    }



}