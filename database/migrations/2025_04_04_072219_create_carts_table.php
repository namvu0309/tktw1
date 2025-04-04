<?php
// create_carts_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained()->onDelete('cascade');
            $table->string('session_id')->nullable(); // Thêm cho khách chưa đăng nhập
            $table->timestamps();
        });


    }

    public function down()
    {
        Schema::dropIfExists('cart_details');
        Schema::dropIfExists('carts');
    }
};
