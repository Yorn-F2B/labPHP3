<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'masv'     => 'required|min:3|max:10',
            'hoten'    => 'required|min:3|max:50',
            'tuoi'     => 'required|integer|min:18|max:100',
            'ngaysinh' => 'required|date_format:d/m/Y',
            'cmnd'     => 'required|digits:12',
            'email'    => 'required|email',
        ];
    }

    public function messages(): array
    {
        return [
            'masv.required'     => 'Vui lòng nhập mã sinh viên',
            'masv.min'          => 'Mã SV phải có ít nhất 3 ký tự',
            'masv.max'          => 'Mã SV không được quá 10 ký tự',
            'hoten.required'    => 'Vui lòng nhập họ tên',
            'hoten.min'         => 'Họ tên phải có ít nhất 3 ký tự',
            'tuoi.required'     => 'Vui lòng nhập tuổi',
            'tuoi.integer'      => 'Tuổi phải là số nguyên',
            'tuoi.min'          => 'Tuổi phải từ 18 trở lên',
            'tuoi.max'          => 'Tuổi không được quá 100',
            'ngaysinh.required' => 'Vui lòng nhập ngày sinh',
            'ngaysinh.date'     => 'Ngày sinh không đúng định dạng',
            'cmnd.required'     => 'Vui lòng nhập CMND',
            'cmnd.digits'       => 'CMND phải đúng 12 chữ số',
            'email.required'    => 'Vui lòng nhập email',
            'email.email'       => 'Email không đúng định dạng',
        ];
    }

    public function attributes(): array
    {
        return [
            'masv'     => 'Mã sinh viên',
            'hoten'    => 'Họ tên',
            'tuoi'     => 'Tuổi',
            'ngaysinh' => 'Ngày sinh',
            'cmnd'     => 'CMND',
            'email'    => 'Email',
        ];
    }
}
