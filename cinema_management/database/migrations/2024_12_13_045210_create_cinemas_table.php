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
    Schema::create('cinemas', function (Blueprint $table) {
        $table->id(); // Primary Key
        $table->string('name'); // Tên rạp chiếu
        $table->string('location'); // Địa chỉ
        $table->integer('total_seats'); // Tổng số ghế
        $table->timestamps(); // Thời gian tạo/cập nhật
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cinemas');
    }
};