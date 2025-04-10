<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ho_ten' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mat_khau' => 'required|string|min:8',
            'dia_chi' => 'nullable|string|max:255',
            'so_dien_thoai' => 'nullable|string|max:20',
            'ngay_sinh' => 'nullable|date',
            'gioi_tinh' => 'required|in:1,2',
            'anh_dai_dien' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'ho_ten.required' => 'Vui lòng nhập họ tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã được sử dụng',
            'mat_khau.required' => 'Vui lòng nhập mật khẩu',
            'mat_khau.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
            'so_dien_thoai.max' => 'Số điện thoại không hợp lệ',
            'gioi_tinh.required' => 'Vui lòng chọn giới tính',
            'gioi_tinh.in' => 'Giới tính không hợp lệ',
            'anh_dai_dien.image' => 'File phải là hình ảnh',
            'anh_dai_dien.mimes' => 'Định dạng hình ảnh không hợp lệ',
            'anh_dai_dien.max' => 'Kích thước hình ảnh tối đa là 2MB'
        ];
    }
}
