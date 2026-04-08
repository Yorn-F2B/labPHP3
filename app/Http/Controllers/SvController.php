<?php

namespace App\Http\Controllers;

use App\Http\Requests\RuleNhapSV;
use App\Models\SinhVien;

class SvController extends Controller
{
    public function sv()
    {
        $dsSv = SinhVien::all();
        return view('nhapsv', compact('dsSv'));
    }

    public function sv_store(RuleNhapSV $request)
    {
        SinhVien::create([
            'masv'     => $request->masv,
            'hoten'    => $request->hoten,
            'tuoi'     => $request->tuoi,
            'ngaysinh' => $request->ngaysinh,
            'cmnd'     => $request->cmnd,
            'email'    => $request->email,
        ]);

        return redirect('/sv')->with('success', 'Lưu sinh viên thành công!');
    }
}
