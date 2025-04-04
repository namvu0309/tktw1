<?php
// create_orders_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {


        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // Thêm mã đơn hàng
            $table->foreignId('account_id')->constrained()->onDelete('cascade');
            $table->foreignId('payment_method_id')->constrained()->onDelete('cascade');
            $table->foreignId('order_status_id')->constrained()->onDelete('cascade');
            $table->decimal('subtotal', 12, 2); // Thêm tổng tiền chưa ship
            $table->decimal('shipping_fee', 12, 2)->default(0);
            $table->decimal('total_amount', 12, 2);
            $table->string('shipping_name');
            $table->string('shipping_phone');
            $table->string('shipping_address');
            $table->string('shipping_email')->nullable();
            $table->text('note')->nullable();
            $table->timestamp('paid_at')->nullable(); // Thêm thời gian thanh toán
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_details');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_statuses');
    }
};
