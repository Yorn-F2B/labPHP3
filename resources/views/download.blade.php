<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Download</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <p>Chào bạn <?= Auth::user()->name ?></p>
    <p>Đây là trang download software, chỉ dành cho thành viên đã đăng nhập</p>
    <p><a href="/thoat">Thoát</a></p>
</body>
</html>
