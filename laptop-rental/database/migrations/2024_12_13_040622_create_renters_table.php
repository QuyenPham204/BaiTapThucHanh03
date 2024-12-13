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
        Schema::create('renters', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name'); // Tên người thuê
            $table->string('phone_number'); // Số điện thoại
            $table->string('email')->unique(); // Email
            $table->timestamps(); // Thời gian tạo/cập nhật
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renters');
    }
};
