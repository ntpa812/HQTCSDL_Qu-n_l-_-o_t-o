@extends('home')
@section('content')
<div class="container">
    <h2>Nhập Điểm Sinh Viên</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @elseif (session('success'))
    <div class="alert alert-success">
        <p>{{ session('success') }}</p>
    </div>
    @endif

    <form action="{{ route('danhsachsinhviens.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="maLHP">Mã Lớp học phần:</label>
            <select name="maLHP" id="maLHP" class="form-control" onchange="filterStudents()" required>
                <option value="" disabled selected>Chọn Mã Lớp học phần</option>
                @foreach ($lopHocPhans as $lopHocPhan)
                <option value="{{ $lopHocPhan->maLHP }}"
                    data-sinhviens="{{ json_encode($lopHocPhan->danhsachsinhvien) }}">
                    {{ $lopHocPhan->maLHP }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="maSV">Mã Sinh Viên:</label>
            <select name="maSV" id="maSV" class="form-control" onchange="updateHoTenAndScores()" required>
                <option value="" disabled selected>Chọn Mã Sinh Viên</option>
            </select>
        </div>

        <div class="form-group">
            <label for="hoTen">Họ Tên Sinh Viên:</label>
            <input type="text" id="hoTen" class="form-control" readonly>
        </div>

        <div class="form-group">
            <label for="diemQT">Điểm Quá Trình:</label>
            <input type="number" name="diemQT" id="diemQT" class="form-control" step="0.1" required>
        </div>

        <div class="form-group">
            <label for="diemThi">Điểm Thi:</label>
            <input type="number" name="diemThi" id="diemThi" class="form-control" step="0.1" required>
        </div>

        <button type="submit" class="btn btn-primary">Nhập Điểm</button>
    </form>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    updateHoTenAndScores(); // Gọi hàm khi trang tải lần đầu
});

function filterStudents() {
    var selectLHP = document.getElementById("maLHP");
    var selectSV = document.getElementById("maSV");
    var selectedOption = selectLHP.options[selectLHP.selectedIndex];
    var sinhVienData = JSON.parse(selectedOption.getAttribute("data-sinhviens"));

    // Xóa tất cả các tùy chọn trong danh sách sinh viên
    selectSV.innerHTML = '<option value="" disabled selected>Chọn Mã Sinh Viên</option>';

    // Thêm các sinh viên thuộc lớp học phần đã chọn
    sinhVienData.forEach(function(sinhVien) {
        var option = document.createElement("option");
        option.value = sinhVien.maSV;
        option.setAttribute("data-hoten", sinhVien.sinhvien.hoTen); // Đảm bảo thuộc tính đúng
        option.setAttribute("data-diemqt", sinhVien.diemQT); // Thêm điểm quá trình
        option.setAttribute("data-diemthi", sinhVien.diemThi); // Thêm điểm thi
        option.textContent = sinhVien.maSV;
        selectSV.appendChild(option);
    });
}

function updateHoTenAndScores() {
    var select = document.getElementById("maSV");
    var selectedOption = select.options[select.selectedIndex];

    if (selectedOption) {
        var hoTen = selectedOption.getAttribute("data-hoten");
        document.getElementById("hoTen").value = hoTen ? hoTen : "";

        // Cập nhật điểm nếu có
        var diemQT = selectedOption.getAttribute("data-diemqt");
        var diemThi = selectedOption.getAttribute("data-diemthi");

        document.getElementById("diemQT").value = diemQT ? diemQT : "";
        document.getElementById("diemThi").value = diemThi ? diemThi : "";
    } else {
        document.getElementById("hoTen").value = "";
        document.getElementById("diemQT").value = "";
        document.getElementById("diemThi").value = "";
    }
}
</script>
@endsection