@extends('home')

@section('content')
<div class="container">
    <h2>Thông tin Sinh Viên</h2>

    <p><strong>Mã Sinh Viên:</strong> {{ $sinhVien->maSV }}</p>
    <p><strong>Họ Tên:</strong> {{ $sinhVien->hoTen }}</p>

    <a href="{{ route('sinhviens.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
</div>
@endsection