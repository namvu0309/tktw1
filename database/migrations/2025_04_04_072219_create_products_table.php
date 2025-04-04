<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('content')->nullable(); // Thêm nội dung chi tiết
            $table->decimal('price', 12, 2); // Tăng độ chính xác
            $table->decimal('sale_price', 12, 2)->nullable(); // Thêm giá khuyến mãi
            $table->integer('quantity')->default(0);
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false); // Thêm sản phẩm nổi bật
            $table->integer('view_count')->default(0); // Thêm số lượt xem
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('products');
    }
};
