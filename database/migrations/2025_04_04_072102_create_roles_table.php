<?php
// create_roles_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Thêm unique
            $table->string('slug')->unique(); // Thêm slug
            $table->string('description')->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('account_role');
        Schema::dropIfExists('roles');
    }
};
