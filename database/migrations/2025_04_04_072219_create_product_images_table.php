<?php
// create_products_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('image_path');
            $table->string('alt')->nullable(); // Thêm alt cho SEO
            $table->boolean('is_primary')->default(false);
            $table->integer('order')->default(0); // Thêm thứ tự hiển thị
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('products');
    }
};
