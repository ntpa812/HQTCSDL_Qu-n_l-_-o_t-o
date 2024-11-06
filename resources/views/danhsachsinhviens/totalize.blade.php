<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tính Điểm Tổng Kết</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Tính Điểm Tổng Kết</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Mã lớp học phần</th>
                    <th>Mã Sinh Viên</th>
                    <th>Họ Tên</th>
                    <th>Điểm Quá Trình</th>
                    <th>Điểm Thi</th>
                    <th>Điểm Tổng Kết</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $sinhVien->maLHP}}</td>
                    <td>{{ $sinhVien->maSV }}</td>
                    <td>{{ $sinhVien->hoTen }}</td>
                    <td>{{ $sinhVien->diemQT }}</td>
                    <td>{{ $sinhVien->diemThi }}</td>
                    <td>{{ number_format($diemTongKet, 2) }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('danhsachsinhviens.index') }}" class="btn btn-primary">Quay lại</a>
    </div>
</body>
</html>
