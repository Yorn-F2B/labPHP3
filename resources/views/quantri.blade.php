<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản trị</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <h2>Trang Quản Trị</h2>
    <p>Chào admin <?= Auth::user()->name ?></p>
    <p>Chỉ user có idgroup = 1 mới vào được trang này.</p>
    <p><a href="/thoat">Thoát</a></p>
</body>
</html>
