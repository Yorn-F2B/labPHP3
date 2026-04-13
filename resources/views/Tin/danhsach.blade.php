<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách tin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <h2>Danh sách tin</h2>
    <div class="mb-3 d-flex gap-2">
        {{-- <a href="/tin/them" class="btn btn-primary">Thêm tin mới</a> --}}
        {{-- <a href="/hs" class="btn btn-info">Form Học Sinh (Lab 7)</a> --}}
        {{-- <a href="/sv" class="btn btn-success">Form Sinh Viên (Lab 7)</a> --}}
        {{-- <a href="/login" class="btn btn-secondary">Đăng nhập</a> --}}
        {{-- <a href="/register" class="btn btn-outline-secondary">Đăng ký</a> --}}
        {{-- <a href="/download" class="btn btn-warning">Download</a> --}}
        {{-- <a href="/quantri" class="btn btn-danger">Quản trị</a> --}}
    </div>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Tóm tắt</th>
                <th>Hình</th>
                <th>Loại</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dsTin as $t)
            <tr>
                <td>{{ $t->idTin }}</td>
                <td>{{ $t->tieuDe }}</td>
                <td>{{ $t->tomTat }}</td>
                <td>
                    @if($t->urlHinh)
                        <img src="{{ $t->urlHinh }}" width="60">
                    @endif
                </td>
                <td>{{ $t->idLT }}</td>
                <td>
                    <a href="/tin/capnhat/{{ $t->idTin }}" class="btn btn-warning btn-sm">Sửa</a>
                    <a href="/tin/xoa/{{ $t->idTin }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Xóa tin này?')">Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
