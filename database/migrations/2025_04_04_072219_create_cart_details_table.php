<?php
// create_carts_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Trong file 2025_04_04_072219_create_cart_details_table.php

    public function up()
    {
        // Xóa bảng nếu đã tồn tại
        Schema::dropIfExists('cart_details');
        Schema::create('cart_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('price', 12, 2);
            $table->text('options')->nullable(); // Thêm tùy chọn sản phẩm (size, màu...)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart_details');
        Schema::dropIfExists('carts');
    }
};
