<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
{
    /**
     * Xác định xem người dùng có được phép thực hiện request này không
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Các quy tắc validation cho request
     */
    public function rules(): array
    {
        $category = $this->route('category');

        return [
            'name' => 'required|string|max:255',
            'slug' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categories')->ignore($category),
            ],
            'description' => 'nullable|string',
            'parent_id' => [
                'nullable',
                'exists:categories,id',
                function ($attribute, $value, $fail) {
                    if ($value == $this->route('category')?->id) {
                        $fail('Không thể chọn chính danh mục này làm danh mục cha.');
                    }
                }
            ],
            'children' => 'nullable|array',
            'children.*' => 'exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'nullable|boolean',
        ];
    }

    /**
     * Tùy chỉnh thông báo lỗi
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Tên danh mục là bắt buộc',
            'name.max' => 'Tên danh mục không được vượt quá 255 ký tự',
            'image.image' => 'File phải là hình ảnh',
            'image.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, gif',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 2MB',
            'parent_id.exists' => 'Danh mục cha không tồn tại',
            'order.integer' => 'Thứ tự phải là số nguyên',
            'order.min' => 'Thứ tự phải lớn hơn hoặc bằng 0',
            'slug.unique' => 'Slug đã tồn tại',
        ];
    }

    /**
     * Chuẩn bị dữ liệu trước khi validate
     */
    protected function prepareForValidation()
    {
        if ($this->name && !$this->slug) {
            $this->merge([
                'slug' => Str::slug($this->name)
            ]);
        }
    }
}
