<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand {{ request()->is('/') ? 'fw-bold' : '' }}" href="/">Trang chủ</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('sinhviens.index') ? 'fw-bold' : '' }}"
                            href="{{ route('sinhviens.index') }}">Sinh viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('danhsachsinhviens.index') ? 'fw-bold' : '' }}"
                            href="{{ route('danhsachsinhviens.index') }}">Danh sách lớp học phần</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>