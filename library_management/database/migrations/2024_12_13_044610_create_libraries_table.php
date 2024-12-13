<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('libraries', function (Blueprint $table) {
        $table->id(); // Primary Key
        $table->string('name'); // Tên thư viện
        $table->string('address'); // Địa chỉ
        $table->string('contact_number'); // Số điện thoại liên hệ
        $table->timestamps(); // Thời gian tạo/cập nhật
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
