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
        Schema::create('hardware_devices', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('device_name'); // Tên thiết bị
            $table->string('type'); // Loại thiết bị
            $table->boolean('status')->default(true); // Trạng thái hoạt động
            $table->unsignedBigInteger('center_id'); // Khóa ngoại
    
            // Khóa ngoại tham chiếu đến it_centers
            $table->foreign('center_id')->references('id')->on('it_centers')->onDelete('cascade');
    
            $table->timestamps(); // Thời gian tạo/cập nhật
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware_devices');
    }
};
