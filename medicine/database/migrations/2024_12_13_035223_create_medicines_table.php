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
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('medicine_id'); // Khóa chính
            $table->string('name', 255); // Tên thuốc
            $table->string('brand', 100)->nullable(); // Thương hiệu (tùy chọn)
            $table->string('dosage', 50)->nullable(); // Thông tin liều lượng
            $table->string('form', 50)->nullable(); // Dạng thuốc
            $table->decimal('price', 10, 2); // Giá thuốc
            $table->integer('stock'); // Số lượng tồn kho
            $table->timestamps(); // Tự động thêm created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
};
