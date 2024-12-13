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
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('sale_id'); // Khóa chính
            $table->unsignedInteger('medicine_id'); // Khóa ngoại tham chiếu đến bảng medicines
            $table->integer('quantity'); // Số lượng bán ra
            $table->dateTime('sale_date'); // Ngày giờ bán hàng
            $table->string('customer_phone', 10)->nullable(); // Số điện thoại khách hàng (tùy chọn)
            $table->timestamps(); // Tự động thêm created_at và updated_at

            // Khóa ngoại
            $table->foreign('medicine_id')->references('medicine_id')->on('medicines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
