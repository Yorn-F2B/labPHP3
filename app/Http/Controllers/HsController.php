<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HocSinh;

class HsController extends Controller
{
    public function hs()
    {
        $dsHs = HocSinh::all();
        return view('nhaphs', compact('dsHs'));
    }

    public function hs_store(Request $request)
    {
        $request->validate([
            'hoten'    => ['required', 'min:3', 'max:20'],
            'tuoi'     => 'required|integer|min:16|max:100',
            'ngaysinh' => ['required', 'date_format:d/m/Y'],
        ]);

        HocSinh::create([
            'hoten'    => $request->hoten,
            'tuoi'     => $request->tuoi,
            'ngaysinh' => $request->ngaysinh,
        ]);

        return redirect('/hs')->with('success', 'Lưu học sinh thành công!');
    }
}
