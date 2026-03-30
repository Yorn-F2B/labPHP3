<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm tin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <h2>Thêm tin mới</h2>
    <form action="/tin/them" method="post" class="col-7 m-auto">
        @csrf
        <p>Tiêu đề: <input name="tieuDe" class="form-control"></p>
        <p>Tóm tắt: <textarea name="tomTat" class="form-control"></textarea></p>
        <p>urlHinh: <input name="urlHinh" class="form-control"></p>
        <p>idLT:
            <select name="idLT" class="form-control">
                <option value="1">Xã hội</option>
                <option value="3">Du lịch</option>
            </select>
        </p>
        <p><button type="submit" class="bg-warning p-2">Thêm tin</button></p>
    </form>
    <div class="col-7 m-auto mt-2">
        <a href="/tin">← Quay lại danh sách</a>
    </div>
</body>
</html>
