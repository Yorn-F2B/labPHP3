<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="col-8 m-auto mt-3">
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
    @endif

    <form method="post" action="{{ route('hs_store') }}" class="p-3 border border-primary mb-4">
        @csrf
        <h3 class="h4 bg-info p-2 mx-n3 mt-n3 text-white">NHẬP THÔNG TIN HỌC SINH</h3>
        <div class="form-group row">
            <label class="col-3">Họ tên học sinh</label>
            <div class="col-9">
                <input value="{{ old('hoten') }}" type="text" class="form-control" name="hoten">
                @error('hoten')<span class="badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Tuổi</label>
            <div class="col-9">
                <input value="{{ old('tuoi') }}" type="text" class="form-control" name="tuoi">
                @error('tuoi')<span class="badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3">Ngày sinh (dd/mm/yyyy)</label>
            <div class="col-9">
                <input value="{{ old('ngaysinh') }}" type="text" class="form-control" name="ngaysinh" placeholder="19/09/2006">
                @error('ngaysinh')<span class="badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                <a href="/" class="btn btn-secondary">Trang chủ</a>
            </div>
        </div>
    </form>

    <h4>Danh sách học sinh</h4>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr><th>ID</th><th>Họ tên</th><th>Tuổi</th><th>Ngày sinh</th></tr>
        </thead>
        <tbody>
            @foreach($dsHs as $hs)
            <tr>
                <td>{{ $hs->id }}</td>
                <td>{{ $hs->hoten }}</td>
                <td>{{ $hs->tuoi }}</td>
                <td>{{ $hs->ngaysinh }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
