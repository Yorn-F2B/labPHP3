<?php

namespace App\Http\Controllers;

use App\Models\tin;
use Illuminate\Http\Request;

class TinController extends Controller
{
    // Bài 1: Lấy danh sách tin
    public function index()
    {
        $dsTin = tin::all();
        return view('Tin.danhsach', compact('dsTin'));
    }

    // Bài 2: Hiển thị form thêm tin
    public function them()
    {
        return view('Tin.them');
    }

    // Bài 2: Lưu tin mới
    public function luuTin(Request $request)
    {
        $tin = new tin();
        $tin->tieuDe = $request->tieuDe;
        $tin->tomTat = $request->tomTat;
        $tin->urlHinh = $request->urlHinh;
        $tin->idLT = $request->idLT;
        $tin->save();
        return redirect('/tin');
    }

    // Bài 3: Xóa tin
    public function xoa($id)
    {
        tin::destroy($id);
        return redirect('/tin');
    }

    // Bài 3: Hiển thị form cập nhật
    public function capnhat($id)
    {
        $tin = tin::find($id);
        return view('Tin.capnhattin', compact('tin'));
    }

    // Bài 3: Lưu cập nhật
    public function luuCapNhat(Request $request, $id)
    {
        $tin = tin::find($id);
        $tin->tieuDe = $request->tieuDe;
        $tin->tomTat = $request->tomTat;
        $tin->urlHinh = $request->urlHinh;
        $tin->idLT = $request->idLT;
        $tin->save();
        return redirect('/tin');
    }
}
