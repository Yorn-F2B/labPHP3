<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LoaiSanPham;
use App\Http\Resources\LoaiSanPhamResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoaiSanPhamController extends Controller
{
    public function index()
    {
        return LoaiSanPhamResource::collection(LoaiSanPham::all());
    }

    public function show($id)
    {
        $loai = LoaiSanPham::find($id);
        if (!$loai) {
            return response()->json(['message' => 'Không tìm thấy loại sản phẩm'], 404);
        }
        return new LoaiSanPhamResource($loai);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tenLoai' => 'required|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $loai = LoaiSanPham::create($request->all());
        return new LoaiSanPhamResource($loai);
    }

    public function update(Request $request, $id)
    {
        $loai = LoaiSanPham::find($id);
        if (!$loai) {
            return response()->json(['message' => 'Không tìm thấy loại sản phẩm'], 404);
        }

        $validator = Validator::make($request->all(), [
            'tenLoai' => 'required|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $loai->update($request->all());
        return new LoaiSanPhamResource($loai);
    }

    public function destroy($id)
    {
        $loai = LoaiSanPham::find($id);
        if (!$loai) {
            return response()->json(['message' => 'Không tìm thấy loại sản phẩm'], 404);
        }
        $loai->delete();
        return response()->json(['message' => 'Xóa loại sản phẩm thành công']);
    }
}
