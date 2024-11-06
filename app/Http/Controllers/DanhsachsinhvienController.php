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
  
//     public function store(Request $request)
// {
//     $request->validate([
//         'maLHP' => 'required|exists:lophocphans,maLHP',
//         'maSV' => 'required|exists:sinhviens,maSV',
//         'diemQT' => 'required|numeric|min:0|max:10',
//         'diemThi' => 'required|numeric|min:0|max:10',
//     ]);

//     try {
//         // Kiểm tra xem sinh viên đã có điểm trong lớp học phần cụ thể hay không
//         $existingRecord = Danhsachsinhvien::where('maLHP', $request->maLHP)
//                                             ->where('maSV', $request->maSV)
//                                             ->first();

//         if ($existingRecord) {
//             // Nếu đã tồn tại, cập nhật điểm
//             $existingRecord->diemQT = $request->diemQT;  // Đảm bảo kiểu dữ liệu
//             $existingRecord->diemThi = $request->diemThi; // Đảm bảo kiểu dữ liệu
//             $existingRecord->save();
//         } else {
//             // Nếu chưa tồn tại, chèn vào
//             Danhsachsinhvien::create([
//                 'maLHP' => $request->maLHP,
//                 'maSV' => $request->maSV,
//                 'diemQT' => $request->diemQT, // Đảm bảo kiểu dữ liệu
//                 'diemThi' => $request->diemThi, // Đảm bảo kiểu dữ liệu
//             ]);
//         }

//         return redirect()->route('danhsachsinhviens.index')->with('success', 'Thêm sinh viên vào danh sách thành công.');
//     } catch (\Illuminate\Database\QueryException $e) {
//         // Bắt lỗi từ MySQL và chuyển nó về view
//         $errorMessage = $e->getMessage();

//         return redirect()->back()->withErrors(['error' => $errorMessage]);
//     }
// }

    public function store(Request $request)
    {
        $request->validate([
            'maLHP' => 'required|exists:lophocphans,maLHP',
            'maSV' => 'required|exists:sinhviens,maSV',
            'diemQT' => 'required|numeric',
            'diemThi' => 'required|numeric',
        ]);

        try {
            // Sử dụng upsert để cập nhật hoặc chèn mới
            Danhsachsinhvien::upsert(
                [
                    [
                        'maLHP' => $request->maLHP,
                        'maSV' => $request->maSV,
                        'diemQT' => $request->diemQT,
                        'diemThi' => $request->diemThi,
                    ]
                ],
                ['maLHP', 'maSV'], // Các cột để xác định bản ghi duy nhất
                ['diemQT', 'diemThi'] // Các cột cần cập nhật
            );

            return redirect()->route('danhsachsinhviens.index')->with('success', 'Điểm đã được cập nhật thành công.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

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