<?php

namespace App\Http\Requests\Admin;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:in_stock,out_of_stock',
        ];

        // Nếu là tạo mới hoặc có gửi ảnh khi cập nhật
        if ($this->isMethod('post') || $this->hasFile('images')) {
            $rules['images'] = 'required|array|min:1';
            $rules['images.*'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['primary_image'] = 'nullable|exists:product_images,id';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự',
            'description.required' => 'Mô tả sản phẩm không được để trống',
            'price.required' => 'Giá sản phẩm không được để trống',
            'price.numeric' => 'Giá sản phẩm phải là số',
            'price.min' => 'Giá sản phẩm không được âm',
            'quantity.required' => 'Số lượng không được để trống',
            'quantity.integer' => 'Số lượng phải là số nguyên',
            'quantity.min' => 'Số lượng không được âm',
            'category_id.required' => 'Danh mục không được để trống',
            'category_id.exists' => 'Danh mục không tồn tại',
            'status.required' => 'Trạng thái không được để trống',
            'status.in' => 'Trạng thái không hợp lệ',
            'images.required' => 'Phải có ít nhất một ảnh sản phẩm',
            'images.array' => 'Dữ liệu ảnh không hợp lệ',
            'images.min' => 'Phải có ít nhất một ảnh sản phẩm',
            'images.*.image' => 'File phải là hình ảnh',
            'images.*.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, gif',
            'images.*.max' => 'Kích thước hình ảnh không được vượt quá 2MB',
            'primary_image.exists' => 'Ảnh chính không tồn tại'
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        // Tạo slug từ tên
        $slug = Str::slug($this->name);

        // Nếu đang cập nhật, kiểm tra trùng slug
        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $product = $this->route('product');
            if ($product && $product->name !== $this->name) {
                $count = 1;
                $originalSlug = $slug;
                while (Product::where('slug', $slug)
                    ->where('id', '!=', $product->id)
                    ->exists()) {
                    $slug = "{$originalSlug}-{$count}";
                    $count++;
                }
            }
        } else {
            // Nếu đang tạo mới
            $count = 1;
            $originalSlug = $slug;
            while (Product::where('slug', $slug)->exists()) {
                $slug = "{$originalSlug}-{$count}";
                $count++;
            }
        }

        $this->merge([
            'slug' => $slug
        ]);
    }
}
