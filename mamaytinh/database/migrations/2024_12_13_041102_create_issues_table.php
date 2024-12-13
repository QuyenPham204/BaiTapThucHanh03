<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('computer_id')->constrained('computers'); // Khóa ngoại tham chiếu tới bảng computers
            $table->string('reported_by', 50)->nullable(); // Người báo cáo (có thể để trống)
            $table->dateTime('reported_date'); // Ngày báo cáo
            $table->text('description'); // Mô tả vấn đề
            $table->enum('urgency', ['Low', 'Medium', 'High']); // Mức độ sự cố
            $table->enum('status', ['Open', 'In Progress', 'Resolved']); // Trạng thái sự cố
            $table->timestamps(); // Tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
};
